<?php



Route::get('signup','Auth\RegisterController@showRegistrationForm')->name('signup.get');
Route::post('signup','Auth\RegisterController@register')->name('signup.post');

Route::get('login','Auth\LoginController@showLoginForm')->name('login');
Route::post('login','Auth\LoginController@login')->name('login.post');
Route::get('logout','Auth\LoginController@logout')->name('logout.get');


Route::get('/',function(){return view('welcome');});
Route::get('/','TasksController@index');
Route::get('share','TasksController@share')->name('tasks.share');


Route::group(['middleware'=>['auth']],function(){
    Route::resource('users','UsersController',['only'=>['show','index']]);   
    Route::resource('tasks','TasksController');
});


