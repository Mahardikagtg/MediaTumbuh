<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Toko;

class TokoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $toko = Toko::all();
        return view('toko',['toko' => $toko]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createToko');
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
            'idtoko' => 'required|min:1',
            'NamaToko' => 'required',
            'AlamatToko' => 'required',
            'NoPengaduanToko' => 'required|min:10',
            'NoRekeningToko' => 'required',
        ]);

        $toko = new Toko;
        $toko -> idtoko = $request -> idtoko;
        $toko -> NamaToko = $request -> NamaToko;
        $toko -> AlamatToko = $request -> AlamatToko;
        $toko -> NoPengaduanToko = $request -> NoPengaduanToko;
        $toko -> NoRekeningToko = $request -> NoRekeningToko;
        $toko -> IsActive = 1;

        $toko -> save();

        return redirect('/toko')->with('status', 'Data Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Toko  $toko
     * @return \Illuminate\Http\Response
     */
    public function show(Toko $toko)
    {
        return view('getToko',['toko' => $toko]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Toko  $toko
     * @return \Illuminate\Http\Response
     */
    public function edit(Toko $toko)
    {
        return view('editToko',['toko' => $toko]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Toko  $toko
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Toko $toko)
    {
        $request -> validate([
            'idtoko' => 'required|min:1',
            'NamaToko' => 'required',
            'AlamatToko' => 'required',
            'NoPengaduanToko' => 'required|min:10',
            'NoRekeningToko' => 'required',
        ]);
        
        Toko::where('idtoko', $toko -> idtoko)
            ->update([
                'idtoko' => $request -> idtoko,
                'NamaToko' => $request -> NamaToko,
                'AlamatToko' => $request -> AlamatToko,
                'NoPengaduanToko' => $request -> NoPengaduanToko,
                'NoRekeningToko' => $request -> NoRekeningToko
            ]);
        
        return redirect('/toko')->with('status', 'Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Toko  $toko
     * @return \Illuminate\Http\Response
     */
    public function destroy(Toko $toko)
    {
        //
    }

    public function enable(Toko $toko)
    {
        if($toko -> IsActive == "1"){
            Toko::where('idtoko', $toko -> idtoko)
                ->update([
                    'IsActive' => 0       
                ]);
        }
        elseif($toko -> IsActive == "0"){
            Toko::where('idtoko', $toko -> idtoko)
                ->update([
                    'IsActive' => 1               
                ]);
        }

        return redirect('/toko')->with('status', 'Data Berhasil Diubah!');
    }
}
