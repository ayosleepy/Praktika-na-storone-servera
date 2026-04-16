<?php
use Src\Route;
use Controller\Site;
Route::add('go', [Site::class, 'index']);
Route::add('hello', [Site::class, 'hello']);
Route::add('bd-test', [Site::class, 'bdTest']);