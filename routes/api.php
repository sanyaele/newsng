<?php

use Illuminate\Http\Request;
Use App\Bank;
Use App\BankBranch;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
 
Route::get('banks', 'BankController@index')->name('all_banks');
Route::get('banks/{id}', 'BankController@show')->name('show_bank');
Route::post('banks', 'BankController@store')->name('add_bank');
Route::put('banks/{id}', 'BankController@update')->name('edit_bank');
Route::delete('banks/{id}', 'BankController@delete')->name('delete_bank');

Route::get('bank/{name}', 'BankController@search')->name('search_bank');
