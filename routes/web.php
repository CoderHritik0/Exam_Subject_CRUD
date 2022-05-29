<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::post('Crud',[CrudController::class,'addData']);
Route::GET('Table',[CrudController::class,'showData']);
Route::POST('Table',[CrudController::class,'update']);
Route::GET('delete/{esm_id}',[CrudController::class,'delete']);
Route::GET('disable/{esm_id}',[CrudController::class,'disable']);
Route::view('Crud', 'crud');