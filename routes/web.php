<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
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

Route::get('/', [MainController::class,'home']);

Route::get('about', [MainController::class,'about']
/*function () {
    return view('about');
}*/
);

Route::get('review', [MainController::class,'review'])->name('review');
Route::get('review/all/{id}',[MainController::class,'review_one'])->name('one');
Route::get('review/all/{id}/update',[MainController::class,'review_update'])->name('update');
Route::get('review/all',[MainController::class,'review_all'])->name('review_all');
Route::post('review/check', [MainController::class,'review_check']);
Route::post('update/check/{id}', [MainController::class,'update_check']);
Route::get('review/all/{id}/delete',[MainController::class,'review_delete'])->name('delete');

Route::get('user/{id}/{name}', function ($id, $name) {
    return '<table border=1><tr><td>id: '.$id.'</td><td> Name: '.$name.'</td></tr></table>' ;
});

?>
