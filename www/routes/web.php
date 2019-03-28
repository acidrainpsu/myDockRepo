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

Route::get('/', 
    'PagesController@login' //call controller
);

//Route::get('/dashboard', 
   // 'PagesController@index' //call controller
//);

Route::get('/hello', function () {
    return '<h1>Hello World</h1>';
});

Route::get('/about', 
    'PagesController@about' //call controller
);




Route::resource('posts', 'PostsController');

//Farms
Route::resource('farms', 'FarmsController');
Route::get('/farm_shows', 
    'FarmsController@shows' //call controller
);


Route::resource('breeds', 'BreedsController');
Route::resource('farmers', 'FarmersController');

//Cows
Route::resource('cows', 'CowsController');
Route::get('/cow_shows', 
    'CowsController@fetchData' //call controller
);

// Route::post('/postinsert',[
//     'uses'=> 'FarmersController@postInsert',
//     'as' => 'farmers.postinsert'
// ]);


Route::get('/pdf',
    'PdfController@create'
);

Auth::routes();

Route::get('/dashboard', 'dashboardController@index');
