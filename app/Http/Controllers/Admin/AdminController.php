<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
class AdminController extends Controller
{
    public function loginAdmin(){
        // dd(bcrypt(12345678));
        if(auth()->check()){
            return redirect()->route('admin.home');
        }
        return view('admin.login');

    }
    public function postLoginAdmin(Request $request){
        // dd($request->has('remember-me'));
        $credentials =  $request->only('email', 'password');
        // dd($credentials);
        $remember = $request->has('remember-me') ? true : false;
        if(auth()->attempt($credentials,$remember)){
            return redirect()->route('admin.home');
        }
        return back()->withErrors([
            'email' => 'Thông tin xác thực không đúng.',
        ]);
    }
    public function logoutAdmin(){
        auth()->logout();
        return redirect()->route('login');
    }
}
