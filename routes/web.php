<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/expenses', 'App\Http\Controllers\ExpenseController@index')->name('expenses.index');
Route::post('/expenses', 'App\Http\Controllers\ExpenseController@store')->name('expense.store');
Route::get('/expenses/{expense}', 'App\Http\Controllers\ExpenseController@show' )->name('expense.show');
Route::put('/expense/{expense}', 'App\Http\Controllers\ExpenseController@update')->name('expense.update');
Route::delete('expense/{expense}', 'App\Http\Controllers\ExpenseController@destroy')->name('expense.destroy');
