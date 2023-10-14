<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DepController;
use App\Http\Controllers\Admin\AdminController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::prefix('admin')->group(function () {
    Route::get('/',[AdminController::class, 'loginAdmin'])->name('login');
    Route::post('/', [AdminController::class, 'postLoginAdmin']);
    Route::get('/logout',[AdminController::class, 'logoutAdmin'])->name('logout');
    Route::get('/home', function(){ return view('admin.home');})->name('admin.home');
    Route::prefix('/dep')->group(function () {
        Route::get('/',[DepController::class,'index'])->name('deps.index');
        Route::get('/create',[DepController::class, 'create'])->name('deps.create');
        Route::post('/store',[DepController::class, 'store'])->name('deps.store');
        Route::get('/edit/{id}',[DepController::class, 'edit'])->name('deps.edit');
        Route::post('/update/{id}',[DepController::class, 'update'])->name('deps.update');
        Route::get('/delete/{id}',[DepController::class, 'delete'])->name('deps.delete');
    });
});

