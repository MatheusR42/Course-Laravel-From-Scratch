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

Route::get('/', function () {
	$people = ['Matheus', 'Jeffrey', 'John'];

    return view('welcome', compact('people'));

    // return view('welcome', ['people' => $people]);
    // return view('welcome')->with('people', $people);
    // return view('welcome')->with(['people' => $people]);
});

Route::get('/about', function () {
    return view('pages.about');
});
