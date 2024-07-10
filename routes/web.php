<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', "HomeController@index")->name("home");

Route::get('/about', "HomeController@about")->name("about");

Route::get('/contact', "ContactController@showForm")->name("contact");

Route::post("/contact", "ContactController@contact");
Route::post("/user/{id}/{name?}", "ContactController@user")
->name("user")
//->where("id", "[0-9]+")
->where(["id" => "[0-9]+", "name" =>"[a-z]+"]);

Route::post("/support-form", "SupportFormController@support")->name("support-form.supoort");