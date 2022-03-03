<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerListController;

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

Route::get('/clear-cache', function() {

   Artisan::call('cache:clear');
   Artisan::call('config:clear');
   Artisan::call('config:cache');
   Artisan::call('view:clear');

   return "Cleared!";

});

Route::get('/', function () {
   return redirect('/dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::group(['middleware'=>'auth'], function(){

    Route::group(['prefix'=>'customer'],function(){
        Route::get('/',[CustomerListController::class,'index']);
        Route::get('/store',[CustomerListController::class,'store']);
        Route::get('/edit',[CustomerListController::class,'edit']);
        Route::get('/update',[CustomerListController::class,'update']);
    });


});





require __DIR__.'/auth.php';
