<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class CustomAuthController extends Controller
{
    public function index()
    {

        return view('auth.login');
    }


    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');


        if (Auth::attempt($credentials)) {
            return redirect()->intended('tasks')
                ->withSuccess('Ви ввійшли в систему');
        }

        return redirect("login")->withSuccess('Дані для входу недійсні');
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        return  redirect()->route('login');
    }



}
