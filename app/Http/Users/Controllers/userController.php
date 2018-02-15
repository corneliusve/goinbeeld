<?php

namespace GO\Http\Users\Controllers;

use Illuminate\Http\Request;
use GO\App\Controllers\Controller;

use GO\domain\Users\User;


class userController extends Controller
{

	public function index($slug)
	{

		$user = User::where('slug', $slug)->first();

		return view('account.account')->with('user', $user);

	}

}
