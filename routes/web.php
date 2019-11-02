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
/* adminController */
	//GET ROUTES
	Route::get('/admin', 'adminController@logInForm');
	Route::get('/admin-menu', 'adminController@adminMenu')->middleware('isLoged');
	Route::get('/admin-logout', 'adminController@logOut')->middleware('isLoged');
	
	//POST ROUTES
	Route::post('/admin-login', 'adminController@logIn');

/* newsController */

	//GET ROUTES
	Route::get('/', 'newsController@index');
	Route::get('/local', 'newsController@local');
	Route::get('/provincial', 'newsController@provincial');
	Route::get('/nacional', 'newsController@nacional');
	Route::get('/internacional', 'newsController@internacional');
	Route::get('/economia', 'newsController@economia');
	Route::get('/cultura', 'newsController@cultura');
	Route::get('/deportes', 'newsController@deportes');
	Route::get('/videos', 'newsController@videos');
	Route::get('/acerca-de', 'newsController@acercaDe');
	Route::get('/contacto', 'newsController@contacto');
	Route::get('/memes', 'newsController@memes');
	
	Route::get('/error', 'newsController@error');
	
	Route::get('/noticia', 'newsController@getNewsById');
	//---->admin routes
	Route::get('/admin-menu/lst-news', 'newsController@lstNews')->middleware('isLoged');
	Route::get('/admin-menu/create-news', 'newsController@createNews')->middleware('isLoged');
	Route::get('/admin-menu/edit-news', 'newsController@editNews')->middleware('isLoged');
	
	//POST ROUTES
	//---->admin routes
	Route::get('/admin-menu/list-news', 'newsController@listNews')->middleware('isLoged');
	Route::post('/admin-menu/save-news', 'newsController@saveNews')->middleware('isLoged');
	Route::post('/admin-menu/update-news', 'newsController@updateNews')->middleware('isLoged');
	Route::post('/admin-menu/delete-news', 'newsController@deleteNews')->middleware('isLoged');

/* bannerController */
	//GET ROUTES
	//---->admin routes
	Route::get('/admin-menu/lst-banners', 'bannerController@lstBanners')->middleware('isLoged');
	Route::get('/admin-menu/create-banner', 'bannerController@createBanner')->middleware('isLoged');
	Route::get('/admin-menu/edit-banner', 'bannerController@editBanner')->middleware('isLoged');
	Route::get('/admin-menu/list-banners', 'bannerController@listBanners')->middleware('isLoged');
	
	//POST ROUTES
	Route::post('/admin-menu/save-banner', 'bannerController@saveBanner')->middleware('isLoged');
	Route::post('/admin-menu/update-banner', 'bannerController@updateBanner')->middleware('isLoged');
	Route::post('/admin-menu/delete-banner', 'bannerController@deleteBanner')->middleware('isLoged');
	
	
	
	
	
/* TEST ROUTES*/
	Route::get('/test', function(){
		echo md5('123456');
	});

