<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

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

Route::get('/login', function () {
    return view('login');
});

Route::get("/logout", function () {
    Session::forget('user');
    Session::forget('admin');
    return redirect('/login');
});

Route::post("/login", [UserController::class, 'login']);
Route::get("/", [ProductController::class, 'index']);

Route::view("register", "register");
Route::post("/register", [UserController::class, 'register']);


Route::get("/detail/{id}", [ProductController::class, 'detail']);
Route::post("/add_to_cart", [ProductController::class, 'addtocart']);

//buy now
Route::get("/buynow/{id}", [ProductController::class, 'buynow']);

Route::get("/cartlist", [ProductController::class, 'cartlist']);

Route::get("/removecart/{id}", [ProductController::class, 'removecart']);

Route::get("/ordernow", [ProductController::class, 'ordernow']);

Route::post("/orderplace", [ProductController::class, 'orderplace']);

Route::get("/myorders", [ProductController::class, 'myorders']);

Route::get("/adminlogin", function () {
    return view('adminlogin');
});

Route::post("/adminlogin", [UserController::class, 'adminlogin']);

Route::get("/admin", [ProductController::class, 'admin']);

Route::get("/addproduct", function () {
    return view('addproduct');
});

Route::post("/addproduct", [ProductController::class, 'addproduct']);

Route::get ("/deleteproduct", [ProductController::class, 'deleteproduct']);

Route::get ("/delete/{id}", [ProductController::class, 'delete']);

Route::get ("/editproduct", [ProductController::class, 'editproduct']);

Route::get ("/edit/{id}", [ProductController::class, 'edit']);

Route::post ("/edit/{id}", [ProductController::class, 'update']);

Route::get ("/updateorder", [ProductController::class, 'updateorder']);

Route::get ("//updateorder/{id}", [ProductController::class, 'updateorderstatus']);