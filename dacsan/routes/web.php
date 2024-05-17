<?php
<<<<<<< HEAD
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\FoodController;
use App\Http\Controllers\Admin\ImageController;
use App\Http\Controllers\Admin\IngredientController;
use App\Http\Controllers\Admin\ServicePointController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Page\PageController;
use App\Http\Controllers\User\LoginController;
use Illuminate\Support\Facades\Route;
=======

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PageController;
>>>>>>> ebe797942ebcf8a979540bc946870bbe5acacdfa

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

<<<<<<< HEAD
Route::prefix('admin')->middleware('admin')->group(function(){
    //CATEGORY
    Route::get('/categories',[CategoryController::class,'index'])->name('categories.index');
    Route::get('/categories/create',[CategoryController::class,'create'])->name('categories.create');
    Route::post('/categories',[CategoryController::class,'store'])->name('categories.store');
    Route::get('/categories/{id}/edit',[CategoryController::class,'edit'])->name('categories.edit');
    Route::post('/categories/{id}',[CategoryController::class,'update'])->name('categories.update');
    Route::get('/categories/{id}',[CategoryController::class,'destroy'])->name('categories.destroy');
    //FOOD()
    Route::get('/food',[FoodController::class,'index'])->name('food.index');
    Route::get('/food/create',[FoodController::class,'create'])->name('food.create');
    Route::post('/food',[FoodController::class,'store'])->name('food.store');
    Route::get('/food/{id}/edit',[FoodController::class,'edit'])->name('food.edit');
    Route::post('/food/{id}',[FoodController::class,'update'])->name('food.update');
    Route::get('/food/{id}',[FoodController::class,'destroy'])->name('food.destroy');       
    //IMAGE
    Route::get('image',[ImageController::class,'index'])->name('images.index');
    Route::get('/image/create',[ImageController::class,'create'])->name('images.create');
    Route::post('/image',[ImageController::class,'store'])->name('images.store');
    Route::get('/image/{id}/edit',[ImageController::class,'edit'])->name('images.edit');
    Route::post('/image/{id}',[ImageController::class,'update'])->name('images.update');
    Route::delete('/image/{id}',[ImageController::class,'destroy'])->name('images.destroy');
    //INGREDIENT
    Route::get('/ingredients',[IngredientController::class,'index'])->name('ingredients.index');
    Route::get('/ingredients/create',[IngredientController::class,'create'])->name('ingredients.create');
    Route::post('/ingredients',[IngredientController::class,'store'])->name('ingredients.store');
    Route::get('/ingredients/{id}/edit',[IngredientController::class,'edit'])->name('ingredients.edit');
    Route::post('/ingredients/{id}',[IngredientController::class,'update'])->name('ingredients.update');
    Route::get('/ingredients/{id}',[IngredientController::class,'destroy'])->name('ingredients.destroy');
    //SERVICE_POINT
    Route::get('/service-point',[ServicePointController::class,'index'])->name('service-point.index');
    Route::get('/service-point/create',[ServicePointController::class,'create'])->name('service-point.create');
    Route::post('/service-point',[ServicePointController::class,'store'])->name('service-point.store');
    Route::get('/service-point/{id}/edit',[ServicePointController::class,'edit'])->name('service-point.edit');
    Route::post('/service-point/{id}',[ServicePointController::class,'update'])->name('service-point.update');
    Route::get('/service-point/{id}',[ServicePointController::class,'destroy'])->name('service-point.destroy');
    //USER
    Route::get('/users',[UserController::class,'index'])->name('users.index');
    Route::get('/users/create',[UserController::class,'create'])->name('users.create');
    Route::post('/users',[UserController::class,'store'])->name('users.store');
    Route::get('/users/{id}/edit',[UserController::class,'edit'])->name('users.edit');
    Route::post('/users/{id}',[UserController::class,'update'])->name('users.update');
    Route::get('/users/{id}',[UserController::class,'destroy'])->name('users.destroy');
    //LOGOUT
    Route::get('/logout',[LoginController::class,'logout'])->name('logout');
    });
    //============================================USER=========================================================
    Route::get('/',[PageController::class,'index'])->name('page.index');
    Route::get('/introduce',[PageController::class,'introduce'])->name('introduce');
    Route::get('/user/food/{id}',[PageController::class,'food'])->name('page.food');
    Route::get('/user/servicepoints',[PageController::class,'servicePoint'])->name('servicepoints');
    Route::get('detail_food/{id}',[PageController::class,'getDetailFood'])->name('page.detail_product');
    Route::get('detail_service_point/{id}',[PageController::class,'getDetailServicePoint'])->name('page.detail_service_point');
    //SEARCH
    Route::get('search',[PageController::class,'getSearch'])->name('page.search');
    //LOGIN
    Route::get('admin/login',[LoginController::class,'index'])->name('login');
    Route::post('admin/login/store',[LoginController::class,'store'])->name('login.store');
=======
Route::get('/',[PageController::class,'index'])->name('admin.index');
>>>>>>> ebe797942ebcf8a979540bc946870bbe5acacdfa
