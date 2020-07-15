<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;

class AdminAuth extends Controller
{
    public function login()
    {
        return view('admin.auth.login');
    }
    public function setLogin(LoginRequest $request)
    {
        $rememberme = $request->input('rememberme')==1 ?true:false;
        if (adminAuth()->attempt(['username'=>$request->input('username'),'password'=>$request->input('password')],$rememberme)) {
            session()->put('login',true);

            return 'login';
        }
        return redirect(aurl('login'));
    }
}
