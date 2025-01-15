<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::view("add-user","add-user");
Route::post("user-info",[UserController::class,"getUser"]);
Route::view("about/{name}","about"); // take name also or without name also ex /about or /about/arjun etc
Route::view("profiles/arjun/photo","about")->name("pup");
Route::get("redirect-use",[UserController::class,"namedRoute"]);

// Route group with prefix
Route::prefix("user")->group(function (){
    // Route::get("/add","add-user");
    Route::view("/login","login-user");
    Route::view("/about","about");
    Route::post("/auth",[UserController::class,"loginUser"]);
    Route::get("/user-list",[UserController::class,"getUsersList"]);
});

// Route group with Controller
Route::controller(UserController::class)->group(function (){
    Route::get("redirect-use","namedRoute");
    Route::post("user-info","getUser");
});