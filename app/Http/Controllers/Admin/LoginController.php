<?php

namespace App\Http\Controllers\Admin;
use Auth;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
class LoginController extends Controller
{

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
     {
    //     $this->middleware('guest')->except('logout');
    //     $this->middleware('guest:admin')->except('logout');
    }

    public function login(){
        return view('auth/login');
    }

    public function adminlogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);
        if (\Auth::guard('admin')->attempt($request->only(['email','password']))){
            // dd(\Auth::guard('admin')->user());
            return redirect()->intended('/admin/categori');
        }
         return back()->withInput($request->only('email', 'remember'));
    }
    public function logout(Request $request){
	    Auth::guard('admin')->logout(); 
	    $request->session()->invalidate();
	    $request->session()->regenerateToken();
	    return redirect('/login');
	}

}
