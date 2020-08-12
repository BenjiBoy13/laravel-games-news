<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@indexAction');
Route::get('/search', 'ContentController@searchAction');

Route::get('/{slug}', 'ContentController@newsAction');
