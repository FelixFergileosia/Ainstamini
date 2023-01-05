<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function loginAction(Request $request)
    {
        $rules = [
            'email' => 'required|email:rfc,dns',
            'password' => 'required'
        ];

        $validator = Validator::make($request->all(), $rules);

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::attempt($credentials, $request->remember))
        {
            $cookieTime = 60;

            Cookie::queue('emailCookie', $request->email, $cookieTime);
            Cookie::queue('passwordCookie', $request->password, $cookieTime);
            Cookie::queue('rememberCookie', $request->remember, $cookieTime);

            session()->put('currentUserSession', Auth::User(), true);

            return redirect('/');
        }
        else{
            return redirect()->back();
        }
    }

    public function registerAction(Request $request)
    {
        $rules = [
            'username' => 'required|unique:users|min:5',
            'email' => 'required|unique:users|email:rfc,dns',
            'password' => 'required|min:5',
            'confirmPassword' => 'required|same:password'
        ];

        $validator = Validator::make($request->all(), $rules);

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $user = new User();
        $user->email = $request->email;
        $user->username = $request->username;
        $user->password = bcrypt($request->password);

        $user->save();

        return redirect('/register')->with(['success' => 'Successfully Registered']);
    }

    private function dropAllCookie()
    {
        Cookie::queue(Cookie::forget('emailCookie'));
        Cookie::queue(Cookie::forget('passwordCookie'));
        Cookie::queue(Cookie::forget('rememberCookie'));
    }

    public function logoutAction()
    {
        if(!Cookie::get('rememberCookie'))
        {
            AuthController::dropAllCookie();
        }
        if(Auth::check())
            Auth::logout();

        return redirect('/login');
    }
}
