<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
    
})->middleware(['auth'])->name('dashboard');


require __DIR__.'/auth.php';

//***************************************************************************************************************
//***************************************admin***************************************************************

/**
 * Group of routes with prefix admin and the middleware Redirect_Admin_Users that is shared in all routes
 */
Route::group(['prefix' => 'admin', 'middleware' => ['auth','Redirect_Admin_Users']], function (){

    /**
	 * this route is 'home' and we redirect to '/admin/home'
	 */
    Route::get('/home', [AdminController::class, 'home'])->name('home');
    /**
     * this route is 'create tournament' and we redirect to '/admin/create/tournament'
     */
    Route::get('/create/tournament', [AdminController::class, 'create_tournament'])->name('admin.create.tournament');
    /**
     * this route is 'store tournament' and we redirect to '/admin/create/tournament'
     */
    Route::post('/store/tournament', [AdminController::class, 'store_tournament'])->name('admin.store.tornament');
     /**
     * this route is 'create equipment' and we redirect to '/admin/create/equipment'
     */
    Route::get('/create/equipment', [AdminController::class, 'create_equipment'])->name('admin.create.equipment');
});