<?php

namespace GO\\Http\Images\Controllers;

use Illuminate\Http\Request;
use GO\Http\Controllers\Controller;

class imagesController extends Controller
{
	public function index()
	{
		return view('home');
	}
}
