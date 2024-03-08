<?php

use App\Http\Controllers\admin\AdminDashboardController;
use App\Http\Controllers\admin\AdminLoginController;
use App\Http\Controllers\dashboard\TasksController;
use App\Http\Controllers\dashboard\UsersController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['prefix' => 'admin'], function () {
    Route::group(['middleware' => 'admin.guest'], function () {
        Route::get('/login', [AdminLoginController::class, 'index'])->name('admin.login');
        Route::post('/authenticate', [AdminLoginController::class, 'authenticate'])->name('admin.authenticate');
    });
    Route::group(['middleware' => 'admin.auth'], function () {
        Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
        Route::get('/users', [AdminDashboardController::class, 'users'])->name('admin.users');
        Route::get('/', [AdminDashboardController::class, 'index'])->name('admin.index');
        Route::get('/logout', [AdminDashboardController::class, 'logout'])->name('admin.logout');

        Route::group(['prefix' => 'tasks'], function () {
            Route::get('/', [TasksController::class, 'index'])->name('admin.tasks');
            Route::get('/fetchTaskAll', [TasksController::class, 'fetchTaskAll'])->name('tasks.fetchtasks');
            Route::post('/taskActive', [TasksController::class, 'taskActive'])->name('tasks.taskActive');
            Route::get('/create', [TasksController::class, 'create'])->name('tasks.create');
            Route::post('/save', [TasksController::class, 'save'])->name('tasks.save');
            Route::get('/{page_id}/delete', [TasksController::class, 'delete'])->name('tasks.delete');
            Route::get('/{page_id}/edit', [TasksController::class, 'edit'])->name('tasks.edit');
            Route::post('/{page_id}/update', [TasksController::class, 'update'])->name('tasks.update');
            Route::post('/saveRecord', [TasksController::class, 'saveRecord'])->name('tasks.saveRecord');
        });

        Route::group(['prefix' => 'users'], function () {
            Route::get('/', [UsersController::class, 'index'])->name('admin.users');
        });
    });
});

Route::get('/', function () {
    return view('pages.home.index');
});
