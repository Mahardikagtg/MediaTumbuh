<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barang = Barang::all();
        return view('barang', ['barang' => $barang]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createBarang');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request -> validate([
            'id' => 'required|min:1',
            'NamaBarang' => 'required',
            'DeskripsiBarang' => 'required',
            'StokBarang' => 'required',
            'HargaBarang' => 'required',
            'FotoBarang' => 'required|max:1024',
        ]);

         $barang = new Barang;
         $barang -> id = $request -> id;
         $barang -> NamaBarang = $request -> NamaBarang;
         $barang -> DeskripsiBarang = $request -> DeskripsiBarang;
         $barang -> StokBarang = $request -> StokBarang;
         $barang -> HargaBarang = $request -> HargaBarang;
         
         
         $imageName = $request->FotoBarang->getClientOriginalName();
         $pemilik = $request->id;
         $request->FotoBarang->move("images/barang/$pemilik/", $imageName);

         $barang -> FotoBarang = $imageName;
         $barang -> save();

        return redirect('/barang')->with('status', 'Data Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function show(Barang $barang)
    {
        return view('getBarang',['barang' => $barang]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function edit(Barang $barang)
    {
        return view('editBarang',['barang' => $barang]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Barang $barang)
    {
        $request -> validate([
            'NamaBarang' => 'required',
            'DeskripsiBarang' => 'required',
            'StokBarang' => 'required',
            'HargaBarang' => 'required',
            'FotoBarang' => 'mimes:jpeg,jpg,png,gif|max:1024',
        ]);

        if($request -> FotoBarang){
            $imageName = $request->FotoBarang->getClientOriginalName();
            $pemilik = $request->id;
            $request->FotoBarang->move("images/barang/$pemilik/", $imageName);

            Barang::where('id', $request -> id)
                ->update([
                    'NamaBarang' => $request -> NamaBarang,
                    'DeskripsiBarang' => $request -> DeskripsiBarang,
                    'StokBarang' => $request -> StokBarang,
                    'HargaBarang' => $request -> HargaBarang,
                    'FotoBarang' => $imageName,
                ]);
            return redirect('/barang')->with('status', 'Data Berhasil Diubah!');
        }

        else {
            Barang::where('id', $request -> id)
            ->update([
                'NamaBarang' => $request -> NamaBarang,
                'DeskripsiBarang' => $request -> DeskripsiBarang,
                'StokBarang' => $request -> StokBarang,
                'HargaBarang' => $request -> HargaBarang,
            ]);
            return redirect('/barang')->with('status', 'Data Berhasil Diubah!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy(Barang $barang)
    {
        //
    }
}
