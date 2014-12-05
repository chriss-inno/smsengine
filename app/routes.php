<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('login');
});
Route::get('home', function()
{
	return View::make('dashboard');
});
Route::get('logout', function()
{
	return Redirect::to('login');
});

Route::get('login', function()
{
	return View::make('login');
});

//Process login 

Route::post('processlogin','UserController@processlogin');

//viewing list of users
Route::resource('users', 'UserController');
//Load employee add form 
Route::get('useradd', 'UserController@add');

//Post employee user 
Route::post('useradd', 'UserController@addpost');

//User edit 
Route::get('useredit/{id}', 'UserController@useredit');

//User view 
Route::get('userview/{id}', 'UserController@userview');

Route::get('subscriptions/add', 'SubscriptionController@add');

Route::resource('subscribers', 'SubscriberController');

//Control message 
Route::resource('messages', 'MessagesController');
//Control message 
Route::get('compose', 'MessagesController@compose');
//Message sents
Route::get('sent', 'MessagesController@sent');
//Pending Messages 
Route::get('pending', 'MessagesController@pending');
//Send  Messages 
Route::post('sendmsg', 'MessagesController@sendmsg');

Route::resource('subscriptions', 'SubscriptionController');

Route::resource('reports', 'ReportsController');

///Manages ser subscriprions

Route::post('subscribe', 'SubscriptionController@subscribe');

//Schedule Message 
Route::get('msgschedule', 'MessagesController@openschedule');
Route::post('msgschedule', 'MessagesController@saveschedule');
//Manage schedule 
Route::get('mschedule', 'MessagesController@openmschedule');


