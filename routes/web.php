<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\MailSendedController;
use App\Http\Controllers\PresentationController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [WelcomeController::class, 'index']);


Route::get('/projects', [ProjectController::class, 'create']);
Route::post('/projects_store', [ProjectController::class, 'store']);
Route::get('/admin/project', [ProjectController::class, 'show']);
Route::get('/admin/project/edit/{id}', [ProjectController::class, 'edit']);
Route::post('/admin/project/update/{id}', [ProjectController::class, 'update']);
Route::get('/admin/project/delete/{id}', [ProjectController::class, 'destroy']);


Route::get('/presentation', [PresentationController::class, 'create']);
Route::post('/presentation_store', [PresentationController::class, 'store']);
Route::get('/admin/presentation', [PresentationController::class, 'show']);
Route::get('/admin/presentation/edit/{id}', [PresentationController::class, 'edit']);
Route::post('/admin/presentation/update/{id}', [PresentationController::class, 'update']);
Route::get('/admin/presentation/delete/{id}', [PresentationController::class, 'destroy']);


Route::get('/about', [AboutController::class, 'create']);
Route::post('/about_store', [AboutController::class, 'store']);
Route::get('/admin/about', [AboutController::class, 'show']);
Route::get('/admin/about/edit/{id}', [AboutController::class, 'edit']);
Route::post('/admin/about/update/{id}', [AboutController::class, 'update']);
Route::get('/admin/about/delete/{id}', [AboutController::class, 'destroy']);


Route::get('/tags', [TagController::class, 'create']);
Route::post('/tag_store', [TagController::class, 'store']);
Route::get('/admin/tags', [TagController::class, 'show']);
Route::get('/admin/tags/edit/{id}', [TagController::class, 'edit']);
Route::post('/admin/tags/update/{id}', [TagController::class, 'update']);
Route::get('/admin/tags/delete/{id}', [TagController::class, 'destroy']);


Route::resource('mails', MailSendedController::class);


Auth::routes();


Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');