<?php
if (!function_exists('aurl')) {
    function aurl($url=null)
    {
        return url('admin/'.$url);
    }
}
if (!function_exists('userInfo')) {
    function userInfo()
    {
		$userId = authInfo()->id;
        return DB::table('employee_view')->where('accountId',$userId)->first();
    }
}
if (!function_exists('staffURL')) {
    function staffURL($url=null)
    {
        return url('staff/'.$url);
    }
}
// page direction
if (!function_exists('dirPage')) {
	function dirPage()
	{
		if (session()->has('lang')) {
			if (session('lang')=='ar') {
				return 'rtl';
			}else{
				return 'ltr';
			}
		}
		else{
			return 'ltr';
		}
	}
}    
// get setting information
if (!function_exists('settingHelper')) {
	function settingHelper()
	{
		return \App\Model\Setting::orderBy('id','desc')->first();
	}
}
if (!function_exists('adminAuth')) {
	function adminAuth()
	{
		return auth()->guard('admin');
	}
}
if (!function_exists('authInfo')) {
	function authInfo()
	{
		if (adminAuth()->check()) {
			$id = adminAuth()->user()->id;
			$userInfo = \App\Admin::where('id',$id)->first();									
			return $userInfo;
		}
	}
}
// page language
if (!function_exists('lang')) {
	function lang()
	{
		if (session()->has('lang')) {
			return session('lang');
		}
		else{
			if (adminAuth()->check()) {
				session()->put('lang',authInfo()->preferredLanguage);
			}
			
			return session('lang');
		}
	}
}
