<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ItemController;

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

Route::get('/',[HomeController::class,'index'])->name('dashboard');

Route::prefix('items')->group(function() {
    Route::get('/',[ItemController::class,'all'])->name('items.all');
    Route::get('/deleted',[ItemController::class,'deleted'])->name('items.deleted');
    Route::get('/print',[ItemController::class,'print'])->name('items.print');
    Route::get('/new',[ItemController::class,'new'])->name('items.new');
    Route::post('/store',[ItemController::class,'store'])->name('items.store');
    Route::get('/{item_id}/edit',[ItemController::class,'edit'])->name('items.edit');
    Route::post('/{item_id}/update',[ItemController::class,'update'])->name('items.update');
    Route::get('/{item_id}/delete',[ItemController::class,'delete'])->name('items.delete');

    Route::get('/{item_id}/restore',[ItemController::class,'restore'])->name('items.restore');
    Route::get('/{item_id}/delete/force',[ItemController::class,'deleteForce'])->name('items.delete.force');

    Route::get('/{item_id}',[ItemController::class,'view'])->name('items.view');
});

Route::prefix('invoice')->group(function() {
    Route::get('/',[InvoiceController::class,'new'])->name('invoice.new');
    Route::post('/create',[InvoiceController::class,'create'])->name('invoice.create');
});
