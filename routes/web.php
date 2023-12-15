<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\ProductController;
use App\Http\Controllers\Frontend\CategoryController;
use App\Http\Controllers\Frontend\SubcatController;


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

// Route::get('/', function () {
//     return view('home')->name("home");
// }); 


// -------------------------------AddProduct Route-List------------------------------------------------------------
Route::get('/',[ProductController::class,'home'])->name("home");


Route::get('/addproduct',[ProductController::class,'addproduct'])->name("addproduct");
Route::post('/productstore',[ProductController::class,'productstore'])->name("productstore");
Route::get('/showproduct',[ProductController::class,'showproduct'])->name("showproduct");
Route::get('/editproduct/{id}',[ProductController::class,'editproduct'])->name("editproduct");
Route::post('/update/{id}',[ProductController::class,'update'])->name("update");
Route::get('/delete/{id}',[ProductController::class,'delete'])->name("delete");
Route::get('/status/{id}',[ProductController::class,'status'])->name("status");




// -------------------------------Add Category Route-List------------------------------------------------------------

Route::get('/category',[CategoryController::class,'category'])->name('category');
Route::post('/addcategory',[CategoryController::class,'addcategory'])->name('addcategory');
Route::get('/showcategory',[CategoryController::class,'show'])->name('showcategory');
Route::get('/deletecategory/{id}',[CategoryController::class,'delete']);
Route::get('/editcategory/{id}',[CategoryController::class,'edit']);
Route::post('/updatecategory/{id}',[CategoryController::class,'update']);
Route::get('/activecategory/{id}',[CategoryController::class,'active']);
Route::get('/inactivecategory/{id}',[CategoryController::class,'inactive']);

// SubCat Route List
Route::get('/subcat',[SubcatController::class,'index'])->name('subcat');
Route::post('/addsubcat',[SubcatController::class,'store'])->name('addsubcat');
Route::get('/subcatshow',[SubcatController::class,'show'])->name('subcatshow');
Route::get('/deletesubcat/{id}',[SubcatController::class,'delete'])->name('deletesubcat');
Route::get('/editsubcat/{id}',[SubcatController::class,'edit'])->name('editsubcat');
Route::post('/updatesubcat/{id}',[SubcatController::class,'update'])->name('updatesubcat');

