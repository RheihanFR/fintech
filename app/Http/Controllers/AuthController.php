<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request){
        $request->validate(
            [
            'email' => 'required',
            'password' => 'required',
            ],
            [
            'email.required' => 'Email harus diisi',
            'password.required' => 'Password harus diisi'
            ]
            );

            $infologin = [
                'email' => $request->email,
                'password' => $request->password,
            ];

            if (Auth::attempt($infologin)){
                if (Auth::user()->role == "kantin"){
                    return redirect()->route('kantin.index');
                } else if (Auth::user()->role == "customer"){
                    return redirect()->route('customer.index');
                } else if (Auth::user()->role == "bank"){
                    return redirect()->route('bank.index');
                }
            } else {
                return redirect()->route('auth.login')->withErrors('Email dan password tidak sesuai')->withInput();
            }
    }

    public function logout(){
        Auth::logout();
        return redirect('');
    }


}