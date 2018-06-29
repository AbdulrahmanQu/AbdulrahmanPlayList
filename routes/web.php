<?php



Route::get('/login', function () {
    return view('home');
});



Route::get('/register', function () {
    return view('login');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/admin/login', function () {
    return view('/admin');
});

Route::get('/owner', function () {
    return view('/owner');
});

Route::get('/owner/login', function () {
    return view('/owner');
});


//Pages

Route::get('/' , 'PagesController@GetHome');
Route::get('/addvideos' , 'PagesController@GetAddVideos');
Route::get('/removevideos' , 'PagesController@GetRemoveVideos');
Route::get('/Authentication' , 'PagesController@GetAuthentication');
Route::get('/Userslist' , 'PagesController@GetUserslist');
Route::get('/Contact' , 'PagesController@GetContact');
Route::get('/Series' , 'PagesController@GetSeries');
Route::get('/Movies' , 'PagesController@GetMovies');





Route::post('/addvideos/submit', 'VideoController@submit');







Route::post('contact/submit' , 'MassagesController@submit');
Route::post('Authentication/submit' , 'OwnerController@Auth');
Route::get('/messages' , 'MassagesController@getMessages');

Route::get('/Movies' , 'VideoController@Movies');
Route::get('/Series' , 'VideoController@Series');
Route::get('/' , 'VideoController@getrecentVideos');


Route::get('/addvideos' , 'VideoController@getaddedVideos');
Route::get('/removevideos' , 'VideoController@removeVideos');



Route::get('/Userslist' , 'OwnerController@getUsers');
Route::get('/Authentication' , 'OwnerController@authUsers');


Route::get('/Userslist' , 'AdminController@getUsers');





Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function(){
	Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
	Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
	Route::get('/', 'adminController@index')->name('admin.dashboard');
});

Route::prefix('owner')->group(function(){
	Route::get('/login', 'Auth\OwnerLoginController@showLoginForm')->name('owner.login');
	Route::post('/login', 'Auth\OwnerLoginController@login')->name('owner.login.submit');
	Route::get('/', 'OwnerController@index')->name('owner.dashboard');
});