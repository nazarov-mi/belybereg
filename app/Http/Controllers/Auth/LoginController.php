<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Response;

class LoginController extends Controller
{

	use AuthenticatesUsers;

	protected $redirectTo = '/admin';


	public function __construct()
	{
		$this->middleware('guest')->except('logout');
	}

	protected function authenticated($request, $user)
	{
		return response()->json(["username" => $user->username], Response::HTTP_OK);
	}

	public function username()
	{
		return 'username';
	}
}
