<?php


use App\Http\Controllers\HomeController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\Itemcontroller;
use App\Http\Controllers\Backend\CustomerController;
use App\Http\Controllers\Backend\Offercontroller;
use App\Http\Controllers\Backend\Ordercontroller;
use App\Http\Controllers\Backend\Employeecontroller;
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
//www.summer.com
//localhost/projectname/public/category
Route::get('/',[HomeController::class,'home']);
Route::get('/contact',[HomeController::class,'contact']);
Route::get('/category',[CategoryController::class,'category'])->name('categories.category');
Route::get('/item',[ItemController::class,'item'])->name('items.item');
Route::get('/customer',[CustomerController::class,'customer'])->name('customers.customer');
Route::get('/offer',[OfferController::class,'offer'])->name('offers.offer');
Route::get('order',[orderController::class,'order'])->name('orders.order');
Route::get('employee',[Employeecontroller::class,'employee'])->name('employees.employee');

