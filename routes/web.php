<?php

use \App\Http\Controllers\LoginController;
use \App\Http\Controllers\MenuController;
use App\Http\Controllers\AdminController;
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

//Route::get('/', function () {
//    return view('welcome');
//});

//--------------------------------MENU SAYFASI ROUTELARI BAŞLANGIÇ---------------------------------------

Route::get('/', [MenuController::class,'indexffffffff'])->name('home');
Route::get('/menu/{id}', [MenuController::class,'menuffffffff'])->name('menu');

//-------------------------------MENU SAYFASI ROUTELARI BİTİŞ-----------------------------------------------




Route::get('/login', [LoginController::class,'loginffffffff'])->name('login');
Route::post('/loginpost', [LoginController::class,'loginpffffffff'])->name('loginp');
Route::get('/logout', [LoginController::class,'logoutffffffff'])->name('logout');




//----------------------------------ADMİN SAYFASI ROUTELARI BAŞLANGIÇ-------------------------------------------
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin',[AdminController::class,'indexffffffff'])->name('admin');
    Route::get('/kategoriler',[AdminController::class,'categoriesffffffff'])->name('categorie');
    Route::get('/kategoriEkleme',[AdminController::class,'add_categoriesffffffff'])->name('add_categories');
    Route::post('/kategoriEkle',[AdminController::class,'category_addffffffff'])->name('category_add');
    Route::get('/kategoriGüncelleme/{id}',[AdminController::class,'edit_categoriesffffffff'])->name('edit_categories');
    Route::post('/kategoriGüncelle',[AdminController::class,'category_updateffffff'])->name('category_update');
    Route::get('/kategoriSilme/{id}',[AdminController::class,'delete_categoriesffffff'])->name('delete_categories');
    Route::get('/ürünler',[AdminController::class,'productsffffff'])->name('products');
    Route::get('/ürünEkleme',[AdminController::class,'add_productffffff'])->name('add_product');
    Route::post('/ürünEkle',[AdminController::class,'product_addffffff'])->name('product_add');
    Route::get('/ürünGüncelleme/{id}',[AdminController::class,'edit_productffffff'])->name('edit_product');
    Route::post('/ürünGüncelle',[AdminController::class,'products_updateffffff'])->name('products_update');
    Route::get('/ürünSilme/{id}',[AdminController::class,'delete_productffffff'])->name('delete_product');
});
//----------------------------------ADMİN SAYFASI ROUTELARI BİTİŞ-------------------------------------------
