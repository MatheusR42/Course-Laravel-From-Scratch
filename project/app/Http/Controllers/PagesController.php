<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function home()
    {
    	$people = ['Matheus', 'Jeffrey', 'John'];

	    return view('welcome', compact('people'));

	    // return view('welcome', ['people' => $people]);
	    // return view('welcome')->with('people', $people);
	    // return view('welcome')->with(['people' => $people]);
    }

    public function about()
    {
    	return view('pages.about');
    }
}
