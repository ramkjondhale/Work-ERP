<?php

use App\Http\Controllers\PreviewController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/ui-test', 'ui-test');

Route::prefix('preview')->name('preview.')->controller(PreviewController::class)->group(function () {
    Route::get('/login', 'login')->name('login');
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::get('/projects', 'projects')->name('projects');
    Route::get('/board', 'board')->name('board');
    Route::get('/tasks', 'tasks_page')->name('tasks');
    Route::get('/users', 'users')->name('users');
});
