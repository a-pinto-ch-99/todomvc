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
	return View::make('hello');
});

//Route::get('/test/{name}/{age}', function( $age, $name )
//{
//echo "test " . $name . "age ". $age;
//});

//Route::get('/index/{name}/{id}', 'TestController@index');
//Route::get('/index/{name}/{id}', array('as' => 'index', 'uses' => 'TestController@index'));

//Route::get('/toto/{id}/{name}', function($id,$name)
//{
//	return View::make('toto')->with('id',$id)->with('name',$name);
  //return View::make('toto',array('id' => $id));
  //return View::make('toto', compact('id'));
//});

Route::get('tasks/create',array('as' => 'tasks.create', 'uses' => 'TasksController@create'));

Route::post('tasks/store',array('as' => 'tasks.store', 'uses' => 'TasksController@store'));


