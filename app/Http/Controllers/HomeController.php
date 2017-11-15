<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;//klassa re.. koji dolazi do nekih podataka u request-u

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
	   return view('home');
    }

	public function aboutUs()
	{
		$bla = 'bla';
		return view('about_us');
	}
}   




