<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mycontroller;

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



// Route for Home Page
Route::get('/',[mycontroller::class,'home'])->name('/');

// Route for welcome page
Route::view('welcome','welcome');

// Route for viewing login page 
Route::get('login',[mycontroller::class,'login_view'])->name('login');

// Route for Authenticating user Or Login  
Route::post('login',[mycontroller::class,'Auth_login'])->name('login');

// Route for viewing singup page
Route::get('signup',[mycontroller::class,'signup_view'])->name('signup');


// Route for new user registeration 
Route::post('signup',[mycontroller::class,'register'])->name('signup');

// Route for new user registeration from create-user page 
Route::get('create-user',[mycontroller::class,'create_user_view'])->name('create-user');

// Route for logout
Route::get('logout',[mycontroller::class,'logout'])->name('logout');


// Route for delete record from Database

Route::get('delete-user/{id}',[mycontroller::class,'delete_user']);


// Route for viewing edit page
Route::get('edit/{id}',[mycontroller::class,'edit_view']);


// Route for updating data 
Route::post('edit-user',[mycontroller::class,'edit_user'])->name('edit-user');