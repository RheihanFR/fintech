<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\TopUp;
use App\Models\Produk;
use App\Models\Wallet;
use App\Models\Kategori;
use App\Models\Transaksi;
use App\Models\Withdrawal;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function kantinIndex()
    {
        $title = 'Dashboard';
        $produks = Produk::all();
        $kategoris = Kategori::all();
        $transaksis = Transaksi::where('status')->get();
        return view('kantin.index', compact('title', 'produks', 'kategoris', 'transaksis'));
    }
    public function bankIndex()
    {
        $title = 'Dashboard';
        $customers = User::where('role', 'customer')->get();
        $wallets = Wallet::all();
        $requestTopups = TopUp::where('status', 'menunggu')->get();
        $requestWithdrawals = Withdrawal::where('status', 'menunggu')->get();
        return view('bank.index', compact('title', 'customers', 'wallets', 'requestTopups', 'requestWithdrawals'));
    }
    public function customerIndex()
    {
        $title = 'Dashboard';
        $wallet = Wallet::where('id_user', auth()->user()->id)->first();
        return view('customer.index', compact('title', 'wallet'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
