<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\http\Requests\AuthRequest;
use Auth;
class AuthController extends Controller{

	public function formLogin(){
		return view('auth.login');
	}
	public function formForgotPassword(){
		return view('auth.forgot-password');
	}

	public function auth(AuthRequest $request){
		$credentials = $request->only(['email','password']);
		if(Auth::attempt($credentials)){
			if(Auth::user()->is_auth == 0){
				Auth::user()->is_auth = 1;
				Auth::user()->save();
				alert()->success('Bienvenido '.Auth::user()->email);
				return redirect('/');
			}
			Auth::logout();
			alert()->warning('Ya te encuetras logeado en otro dispositivo');
			return redirect('auth/login');
		}
		return redirect('/auth/login')->withErrors(['email'=>trans('auth.failed')])->withInputs(request('email'));
	}
	public function logout(Request $request){
		Auth::user()->is_auth = 0;
		Auth::user()->save();
		Auth::logout();
		return redirect('/auth/login');
	}

}
