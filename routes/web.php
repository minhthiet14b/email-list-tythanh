<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DepController;
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
    Route::prefix('/dep')->group(function () {
        Route::get('/',[DepController::class,'index'])->name('deps.index');
        Route::get('/create',[DepController::class, 'create'])->name('deps.create');
        Route::post('/store',[DepController::class, 'store'])->name('deps.store');
        Route::get('/edit/{id}',[DepController::class, 'edit'])->name('deps.edit');
    });
});

