<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\CartComponent;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Admin\UserDashboardComponent;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', HomeComponent::class)->name('home1');

Route::get('/cart', CartComponent::class);

//for User or Customer
Route::middleware(['auth:sanctum', 'verified'])->group(function() {
    
});

//for Admin
Route::middleware(['auth:sanctum', 'verified'])->group(function() {
    Route::get('/admin/dashboard',AdminDashboardComponent::class);
});

//Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//    return view('dashboard');
//})->name('dashboard');

