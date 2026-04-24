<?php
use Src\Route;

Route::add('GET', '/', [Controller\Site::class, 'index']);
Route::add(['GET', 'POST'], '/signup', [Controller\Site::class, 'signup']);
Route::add(['GET', 'POST'], '/login', [Controller\Site::class, 'login']);
Route::add('GET', '/logout', [Controller\Site::class, 'logout']);
Route::add('GET', '/security/dashboard', [Controller\Site::class, 'securityDashboard'])->middleware('auth');
Route::add('POST', '/security/block-pass', [Controller\Site::class, 'blockPass'])->middleware('auth');
Route::add('GET', '/security/report', [Controller\Site::class, 'securityReport'])->middleware('auth');
Route::add('GET', '/security/search', [Controller\Site::class, 'securitySearch'])->middleware('auth');
Route::add('GET', '/admin', [Controller\Site::class, 'adminDashboard'])->middleware('auth');
Route::add('GET', '/admin/create', [Controller\Site::class, 'showCreateUser'])->middleware('auth');
Route::add(['GET', 'POST'], '/admin/store', [Controller\Site::class, 'createUser'])->middleware('auth');