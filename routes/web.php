<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactsController;
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

Route::get('/index', [ContactsController::class, 'index']); 
Route::post('/index', [ContactsController::class, 'post']);



Route::get('/thanks', [ContactsController::class, 'thanks']); 

