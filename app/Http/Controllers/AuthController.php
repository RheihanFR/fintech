<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Wallet;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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

    /**
     * Show the form for creating a new resource.
     */
    public function regist()
    {
        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function login(Request $request)
    {
        $request->validate(
            [
                'email' => 'required',
                'password' => 'required',
            ],
            [
                'email.required' => 'Email tidak boleh kosong',
                'password.required' => 'Password tidak boleh kosong',
            ]
        );
        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if (Auth::attempt($infologin)) {
            if (Auth::user()->role == 'customer') {
                return redirect()->route('customer.index');
            } elseif (Auth::user()->role == 'kantin') {
                return redirect()->route('kantin.index');
            } elseif (Auth::user()->role == 'bank') {
                return redirect()->route('bank.index');
            }
        } else {
            return back()->with('error', 'Email atau password salah');
        }
    }


 /**
 * Store a newly created resource in storage.
 */
public function register(Request $request)
    {
        $request->validate(
            [
                'nama' => 'required',
                'email' => 'required|unique:users|email',
                'password' => 'required|min:4',
            ],
            [
                'email.required' => 'Email harus diisi',
                'password.required' => 'Password harus diisi',
            ]
            );

            $infologin = [
                'nama' => $request->nama,
                'email' => $request->email,
                'password' => $request->password,
                'role' => 'customer',
            ];

            $userRegist = User::create($infologin);
            $rek = '64' . auth()->id() . now()->format('YmdHis');
            $wallet = Wallet::create([
                'id_user' => $userRegist->id,
                'rekening' => $rek,
                'saldo' => 0,
                'status' => 'aktif',
            ]);

            return redirect()->route('login')->with('success', 'Berhasil registrasi');
    }


    public function logout()
    {
        Auth::logout();
        return redirect('');
    }
}
