<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\BranchController;

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

Route::group(['prefix' => '/branch'],function(){
    Route::get('/add',[BranchController::class,'add'])->name('branch.add');
    Route::post('/store',[BranchController::class,'store'])->name('branch.store');
    Route::get('/manage',[BranchController::class,'manage'])->name('branch.manage');
    Route::get('/edit{id}',[BranchController::class,'edit'])->name('branch.edit');
    Route::post('/update{id}',[BranchController::class,'update'])->name('branch.update');
    Route::get('/destroy{id}',[BranchController::class,'destroy'])->name('branch.destroy');
    Route::get('/status{id}',[BranchController::class,'status'])->name('branch.status');
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

