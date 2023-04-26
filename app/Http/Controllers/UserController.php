<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use App\Models\User;
use App\Models\Barang;
use App\Models\Transaksi;
use App\Models\Toko;

class UserController extends Controller
{
    public function shop(){
        $barang = Barang::all();
        return view('shop',['barang' => $barang]);
    }

    public function about(){
        return view('about');
    }

    public function forum(){
        return view('forum');
    }

    public function store(Request $request)
    {
        $nambah = $request -> validate([
            'id' => 'required|min:5',
            'email' => 'required',
            'nama' => 'required',
            'password' => 'required|min:8',
        ]);

        $user = new User;
        $user -> username = $request -> id;
        $user -> email = $request -> email;
        $user -> nama = $request -> nama;
        $user -> password = Hash::make($request-> password);

        $user -> save();

        return redirect('/');
    }

    public function profile(){
        $id = Auth::id();
        $data = User::where('username', $id)->first();
        return view('profile',['user' => $data]);
    }

    public function editprofile(){
        $id = Auth::id();
        $data = User::where('username', $id)->first();
        return view('editprofile',['user' => $data]);
    }

    public function upload(Request $request, User $user){
        $id = Auth::id();
        $request -> validate([
            'username' => 'required|min:1',
            'gambar' => 'mimes:jpeg,jpg,png,gif',
        ]);

        if ($request -> gambar) {
            $imageName = $request->gambar->getClientOriginalName();
            $pemilik = $request->username;
            $request->gambar->move("images/user/$pemilik/", $imageName);

            User::where('username', $id)
            ->update([
                'username' => $request -> username,
                'nama' => $request -> nama,
                'email' => $request -> email,
                'nomorhp' => $request -> nomorhp,
                'jeniskelamin' => $request -> jeniskelamin,
                'foto' => $imageName,
                'alamat' => $request -> alamat,
                'kodepos' => $request -> kodepos
            ]);
        }
        
        else {
            User::where('username', $id)
            ->update([
                'username' => $request -> username,
                'nama' => $request -> nama,
                'email' => $request -> email,
                'nomorhp' => $request -> nomorhp,
                'jeniskelamin' => $request -> jeniskelamin,
                'alamat' => $request -> alamat,
                'kodepos' => $request -> kodepos
            ]);
        }

        return redirect('/profile')->with('status', 'Data Berhasil Ditambahkan!');
    }

    public function openshop(Barang $shop){
        return view('showitem',['barang' => $shop]);
    }

    public function buy(Barang $buy){
        $id = Auth::id();
        $user = User::where('username', $id)->first();
        $toko = Toko::all();
        return view('buy',['barang' => $buy,'user' => $user, 'toko' => $toko]);
    }

    public function maketransaction(Request $request){
        if (Auth::id()) {
            $transaksi = new Transaksi;
            $barang = Barang::where('id', $request -> barangid)->first();
            $id = IdGenerator::generate(['table' => 'transaksi', 'field'=>'idtransaksi', 'length' => 8, 'prefix' =>'TRX-']);
            $transaksi -> idtransaksi = $id;
            $transaksi -> username = $request -> username;
            $transaksi -> namalengkap = $request -> namalengkap;
            $transaksi -> email = $request -> email;
            $transaksi -> idbarang = $barang -> id;
            $transaksi -> alamat = $request -> alamat;
            $transaksi -> alamat2 = $request -> alamat2;
            $transaksi -> kodepos = $request -> kodepos;
            $transaksi -> tokopengirim = $request -> toko;
            $transaksi -> ekspedisi = $request -> ship;
            $transaksi -> paymentMethod = $request -> paymentMethod;
            $transaksi -> ccname = $request -> ccname;
            $transaksi -> ccnumber = $request -> ccnumber;
            $transaksi -> ccexpiration = $request -> ccexpiration;
            $transaksi -> cccvv = $request -> cccvv;
            $transaksi -> totalorder = ($barang -> HargaBarang)+2000;

            $transaksi -> save();

            Barang::where('id', $request -> barangid)
            ->update([
                'StokBarang' => ($barang -> StokBarang) - 1,
            ]);

            return redirect('/orderhistory');
        }
        return redirect('buy');
    }

    public function order(){
        $id = Auth::id();
        $order = Transaksi::where('username', $id)->get();
        $idbarang = $order->map(function ($order) {
            return $order->only(['idbarang']);
        });
        $i = 0;
        foreach ($idbarang as $idb) {
            $barang[$i] = Barang::where('id', $idb)->first();
            $i++;
        }
        return view('orderhistory',['order' => $order,'barang' => $barang]);
    }

    public function userindex(){
        $user = User::all();
        return view('userindex', ['user' => $user]);
    }
}

