<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Transaksi;

class TransController extends Controller
{
    public function index()
    {
        $transaksi = Transaksi::all();
        return view('transaksi',['transaksi' => $transaksi]);
    }

    public function show(Transaksi $transaksi)
    {
        return view('getTransaksi',['transaksi' => $transaksi]);
    }
}
