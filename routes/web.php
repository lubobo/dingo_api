<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});


$api=app('Dingo\Api\Routing\Router');
$api->version('v1',function ($api){
    $api->get('/getHello',[
        'uses'=>'App\Http\Controllers\Api\ApiController@getHello',
        'as'=>'getHello'
    ]);
});
