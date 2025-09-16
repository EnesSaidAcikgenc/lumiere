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

Route::get('/', [MenuController::class,'index'])->name('home');
Route::get('/menu/{id}', [MenuController::class,'menu'])->name('menu');

//-------------------------------MENU SAYFASI ROUTELARI BİTİŞ-----------------------------------------------




Route::get('/login', [LoginController::class,'login'])->name('login');
Route::post('/loginpost', [LoginController::class,'loginp'])->name('loginp');
Route::get('/logout', [LoginController::class,'logout'])->name('logout');




//----------------------------------ADMİN SAYFASI ROUTELARI BAŞLANGIÇ-------------------------------------------
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin',[AdminController::class,'index'])->name('admin');
    Route::get('/kategoriler',[AdminController::class,'categories'])->name('categorie');
    Route::get('/kategoriEkleme',[AdminController::class,'add_categories'])->name('add_categories');
    Route::post('/kategoriEkle',[AdminController::class,'category_add'])->name('category_add');
    Route::get('/kategoriGüncelleme/{id}',[AdminController::class,'edit_categories'])->name('edit_categories');
    Route::post('/kategoriGüncelle',[AdminController::class,'category_update'])->name('category_update');
    Route::get('/kategoriSilme/{id}',[AdminController::class,'delete_categories'])->name('delete_categories');
    Route::get('/ürünler',[AdminController::class,'products'])->name('products');
    Route::get('/ürünEkleme',[AdminController::class,'add_product'])->name('add_product');
    Route::post('/ürünEkle',[AdminController::class,'product_add'])->name('product_add');
    Route::get('/ürünGüncelleme/{id}',[AdminController::class,'edit_product'])->name('edit_product');
    Route::post('/ürünGüncelle',[AdminController::class,'products_update'])->name('products_update');
    Route::get('/ürünSilme/{id}',[AdminController::class,'delete_product'])->name('delete_product');
});
//----------------------------------ADMİN SAYFASI ROUTELARI BİTİŞ-------------------------------------------
