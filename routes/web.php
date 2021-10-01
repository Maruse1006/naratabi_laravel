<?php

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

use Illuminate\Http\Request;

use App\Http\Controllers\PostController;

use App\Http\Controllers\HelloController;

use App\Http\Controllers\PlaceController;

use Laravel\Passport\Passport;


//Route::get('hello','HelloController@index');



//Route::get('/posts/{id}','PostsController@show');


Route::get('/hello','HelloController@hello');
Route::post('/hello','HelloController@search');

Route::get('place','PlaceController@index');
Route::post('place/find','PlaceController@search');

Route::get('place/find/{id}','PlaceController@show')->name('place.show');

Route::get('test',function(){
  return view('place.test');
});
Route::get('/app',function(){
  return view('app');
});
// Route::middleware('auth:api')->get('/user', function (Request $request) {
//  return $request->user();
// });
