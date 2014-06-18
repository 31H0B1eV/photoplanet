<?php

/**
 * Laravel uses Blade and Blade comes with a way to change the tags.
 * If you want to keep the Angular syntax default, then use this method.
 * Change the Laravel Blade Tags:
 */
Blade::setContentTags('<%', '%>'); 		// for variables and all things Blade
Blade::setEscapedContentTags('<%%', '%%>'); 	// for escaped data

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

Route::get('/', 'HomeController@index');

Route::get('/popular', 'PopularController@show');