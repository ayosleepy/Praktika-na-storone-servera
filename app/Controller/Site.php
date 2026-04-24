<?php
namespace Controller;

use Model\Event;
use Model\Pass;
use Model\User;
use Src\Auth\Auth;
use Src\Request;
use Src\View;

class Site
{
    public function index(): string
    {
        app()->route->redirect('/login');
        return '';
    }

    public function signup(Request $request): string
    {
        if ($request->method === 'POST' && User::create($request->all())) {
            app()->route->redirect('/login');
        }
        return new View('site.signup');
    }

    public function login(Request $request): string
    {
        if ($request->method === 'GET') {
            return new View('site.login');
        }
        if (Auth::attempt($request->all())) {
            if (app()->auth->user()->role === 'admin') {
                app()->route->redirect('/admin');
            } else {
                app()->route->redirect('/security/dashboard');
            }
        }
        return new View('site.login', ['message' => 'Неправильные логин или пароль']);
    }

    public function logout(): void
    {
        Auth::logout();
        app()->route->redirect('/login');
    }

    public function securityDashboard(Request $request): string
    {
        $events = collect();

        if ($request->get('search')) {
            $search = $request->get('search');
            $events = Event::with('pass.employee', 'turnstile')
                ->whereHas('pass.employee', function ($q) use ($search) {
                    $q->where('full_name', 'like', '%' . $search . '%');
                })
                ->orderBy('event_time', 'desc')
                ->limit(50)
                ->get();
        }

        return new View('security.dashboard', ['events' => $events]);
    }

    public function securityReport(Request $request): string
    {
        $dateFrom = $request->get('date_from') ?? date('Y-m-d');
        $dateTo = $request->get('date_to') ?? date('Y-m-d');

        $events = Event::with('pass.employee')
            ->whereBetween('event_time', [$dateFrom . ' 00:00:00', $dateTo . ' 23:59:59'])
            ->orderBy('event_time')
            ->get();

        return new View('security.report', [
            'events' => $events,
            'date_from' => $dateFrom,
            'date_to' => $dateTo
        ]);
    }

    public function securitySearch(Request $request): string
    {
        $cardNumber = $request->get('card_number') ?? '';
        $events = [];

        if (!empty($cardNumber)) {
            $pass = Pass::where('card_number', 'LIKE', "%{$cardNumber}%")->first();
            if ($pass) {
                $events = Event::with('turnstile')
                    ->where('pass_id', $pass->id)
                    ->orderBy('event_time', 'desc')
                    ->get();
            }
        }

        return new View('security.search', [
            'events' => $events,
            'card_number' => $cardNumber
        ]);
    }

    public function blockPass(Request $request): void
    {
        if ($request->method === 'POST') {
            $passId = (int) $request->get('pass_id');
            if ($passId) {
                Pass::where('id', $passId)->update(['is_blocked' => 1]);
            }
        }
        app()->route->redirect('/security/dashboard');
    }

    private function isAdmin(): bool
    {
        return app()->auth->check() && app()->auth->user()->role === 'admin';
    }

    public function adminDashboard(): string
    {
        if (!$this->isAdmin()) {
            app()->route->redirect('/security/dashboard');
        }
        $users = User::where('role', 'guard')->get();
        return new View('admin.users', ['users' => $users]);
    }

    public function showCreateUser(): string
    {
        if (!$this->isAdmin()) {
            app()->route->redirect('/security/dashboard');
        }
        return new View('admin.create');
    }

    public function createUser(Request $request): string
    {
        if (!$this->isAdmin()) {
            app()->route->redirect('/security/dashboard');
        }

        if ($request->method === 'POST') {
            $data = $request->all();
            if (empty($data['name']) || empty($data['login']) || empty($data['password'])) {
                return new View('admin.create', ['message' => 'Заполните все поля']);
            }

            $data['role'] = 'guard';
            if (User::create($data)) {
                app()->route->redirect('/admin');
            }
            return new View('admin.create', ['message' => 'Ошибка создания']);
        }
        return new View('admin.create');
    }
}