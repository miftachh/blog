<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function getLogin()
    {
    	return view('admin.login/viewlogin');
    }

    public function postLogin(Request $request)
   	{
   		if (Auth::attempt(['email' => $request->email, 'password' => $request->password],true))
   		{
   			return redirect()->intended('account/dashboard');
      	}
      	else
      	{
           	return redirect('account/login')->with('message', 'Email and Password is wrong!');
      	}
    }
    public function Logout()
	{
        Auth::logout();
        return redirect('/');
  	}
}
