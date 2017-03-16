<?php

// First Route method – Root URL will match this method


Route::group(/**
 *
 */
    ['middleware' => ['web']],function() {

    Route::get('/', function () {
        return view('welcome');
    });

    Route::post('/signup', [
        'uses'=> 'UserController@postSignUp',
        'as' => 'signup']);

    Route::get('/introduction' , [
        'uses'=> 'UserController@getintroduction',
        'as'=> 'introduction']);

    Route::get('/signin', [
        'uses'=> 'UserController@postSignIn',
        'as' => 'signin']);

});