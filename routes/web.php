<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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

Route::patch("/users/{id}/guncelle","UserController@update")->name("user.update");
Route::put("/users/{id}/tumunu-guncelle", "UserController@updateAll")->name("user.updateAll");

Route::delete("/user/{id}/delete", "UserController@delete")->name("user.delete");

Route::resource('article', 'ArticleController');

Route::apiResource("/api/article", "Api/ArticleController");

Route::get('/users/{id}', "UserController@show")
->name("user.show")
->whereNumber("id");

Route::get("/users/{id}", "UserController@showName")
->name("user.showName")
->whereAlpha("id");


Route::get("/user/{role}", "UserController@roleCheck")
->name("user.roleCheck")
->whereIn('role', ['admin', 'user']);

Route::prefix("admin")->group(function(){
    Route::get("/edit-article", "ArticleController@edit")->name("admin.articleEdit");
    Route::get("/article/{id}/delete", "ArticleController@destroy")->name("admin.articleDestroy");

});

Route::controller(UserController::class)->group(function(){
    Route::get("/get-user", "getUser");
    Route::get("/delete-user", "deleteUser");

});