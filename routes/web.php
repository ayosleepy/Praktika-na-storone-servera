<?php
use Src\Route;
Route::add('GET', '/hello', [Controller\Site::class, 'hello'])
    ->middleware('auth');
Route::add(['GET', 'POST'], '/signup', [Controller\Site::class, 'signup']);
Route::add(['GET', 'POST'], '/login', [Controller\Site::class, 'login']);
Route::add('GET', '/logout', [Controller\Site::class, 'logout']);
Route::add('GET', '/security/dashboard', [Controller\Site::class, 'securityDashboard'])->middleware('auth');
Route::add('GET', '/security/report', [Controller\Site::class, 'securityReport'])->middleware('auth');
Route::add('GET', '/security/search', [Controller\Site::class, 'securitySearch'])->middleware('auth');