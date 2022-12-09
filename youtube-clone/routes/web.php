<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContentController;
//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/',[HomeController::class, 'home'])->name('home');
Route::get('/content/add',[ContentController::class, 'add'])->name('content.add');
Route::post('/content/store',[ContentController::class, 'store'])->name('content.store');
Route::get('/content/manage',[ContentController::class, 'manage'])->name('content.manage');

Route::get('/content/edit/{id}', [ContentController::class, 'editContent'])->name('content.edit');
Route::post('/content/update/{id}', [ContentController::class, 'updateContent'])->name('content.update');
Route::get('/content/delete/{id}', [ContentController::class, 'deleteContent'])->name('content.delete');
Route::get('/content/detail/{id}', [ContentController::class, 'detailContent'])->name('content.detail');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/home', function () {
        return view('admin.home.home');
    })->name('dashboard');
});
