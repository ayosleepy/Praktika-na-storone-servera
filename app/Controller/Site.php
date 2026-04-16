<?php
namespace Controller;
use Src\View;
use Model\Employee;
class Site
{
    public function index(): string
    {
        $view = new View();
        return $view->render('site.hello', ['message' => 'index working']);
    }
    public function hello(): string
    {
        return new View('site.hello', ['message' => 'hello working']);
    }
    public function bdTest(): void
    {
        try {
            $emp = new Employee();
            $emp->full_name = 'Иванов Иван';
            $emp->position = 'Охранник';
            $emp->save();
            echo 'БД подключена успешно!';
        } catch (\Exception $e) {
            echo 'Ошибка: ' . $e->getMessage();
        }
    }
}