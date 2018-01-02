<?php
use App\User;
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

Route::prefix('admin') -> group(function() {

    Route::get('users','users@showUsers');

    // get user
    Route::get('user/{id}', function($id) {
        return view('cms.user.edit') -> with('user', User::find($id));
    });

    // update user info
    Route::post('user/update/{id}', array('as' => 'user.update', 'uses' => 'users@update'));

    //delete user
    Route::get('user/delete/{id}', 'users@destroy');

    //search users
    Route::get('users/search','users@search');

    //show fixed utilities
    Route::get('fixed-utilities','utilities@fixedUtilitiesIndex');

    //show movable utilities
    Route::get('movable-utilities','utilities@movableUtilitiesIndex');

    //search utilities
    Route::get('utilities/search','utilities@search');

     //delete utility
     Route::get('utility/delete/{id}', 'utilities@destroy');

     // get utility
    Route::get('utility/{id}', 'utilities@edit');

    // update user info
    Route::post('utility/update/{id}', array('as' => 'utility.update', 'uses' => 'utilities@update'));
});


