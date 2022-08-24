<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\BranchController;
use App\Http\Controllers\Backend\ProductController;

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

// All Routes for Branch
Route::group(['prefix' => '/branch'],function(){
    Route::get('/add',[BranchController::class,'add'])->name('branch.add');
    Route::post('/store',[BranchController::class,'store'])->name('branch.store');
    Route::get('/manage',[BranchController::class,'manage'])->name('branch.manage');
    Route::get('/edit{id}',[BranchController::class,'edit'])->name('branch.edit');
    Route::post('/update{id}',[BranchController::class,'update'])->name('branch.update');
    Route::get('/destroy{id}',[BranchController::class,'destroy'])->name('branch.destroy');
    Route::get('/status{id}',[BranchController::class,'status'])->name('branch.status');
});

//All Routes For Products
Route::group(['prefix' => '/product'],function(){
    Route::get('/add',[ProductController::class,'add'])->name('product.add');
    Route::post('/store',[ProductController::class,'store'])->name('product.store');
    Route::get('/show',[ProductController::class,'show'])->name('product.show');
    Route::get('/edit{id}',[ProductController::class,'edit'])->name('product.edit');
    Route::post('/update{id}',[ProductController::class,'update'])->name('product.update');
    Route::get('/destroy{id}',[ProductController::class,'destroy'])->name('product.destroy');
    Route::get('/status{id}',[ProductController::class,'status'])->name('product.status');
});








Route::get('/admin', function () {
    return view('backend.dashboard');
})->name("dashboard");

Route::get('/admin/addproduct', function () {
    return view('backend.pages.product.addproduct');
})->name("addproduct");

Route::get('/admin/manageproduct', function () {
    return view('backend.pages.product.manageproduct');
})->name("manageproduct");

