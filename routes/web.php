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

Route::get('admin/dep',[DepController::class,'index'])->name('dep.index');
Route::get('admin/dep/create',[DepController::class, 'create'])->name('dep.create');
