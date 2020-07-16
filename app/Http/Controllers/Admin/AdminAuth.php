<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;

class AdminAuth extends Controller
{
    public function login()
    {
        if (session()->has('login') == true) {
            return view('layouts.cpanel');
        }else{
            return view('admin.auth.login');
        }
    }

    public function setLogin(LoginRequest $request)
    {
        $rememberme = $request->input('rememberme')==1 ?true:false;

        if (adminAuth()->attempt(['username'=>$request->input('username'),'password'=>$request->input('password')],$rememberme)) {
            session()->put('login',true);

            if (!session()->has('lang')) {
                session()->put('lang',authInfo()->preferredLanguage);
            }
            return redirect(aurl('dashboard'));
        }

        return redirect(aurl('login'))->with('error',trans('admin.invalid_login'));
    }

    public function logout()
    {
    	adminAuth()->logout();
        session()->forget('login');

    	return redirect(aurl('login'));
    }
}
