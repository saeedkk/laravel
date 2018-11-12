<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {

    //----------------Lesson 19------------------------------
    //return view('welcome');
//    if (Auth::check()){
//        return 'user is logged in';
//    } else {
//        return 'user is not logged in';
//    }

    //----------------------------------------------
//    $email = 'saeed.kfb66@gmail.com';
//    $password = '@Ss12645';
//    if (Auth::attempt(['email'=>$email , 'password'=>$password])){
//        return 'true';
//    }
//    Auth::logout(); // exit
return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

// Lesson 20

Route::get('/user/panel', ['middleware'=>'Role',function (){
    return 'User Panel';
}]);

Route::get('/middleware',['middleware'=>'Role', function (){

}]);

Route::get('/admin', 'AdminController@index');


// Lesson 21
Route::resource('/post','PostController'); //resource route posts