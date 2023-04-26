<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Ekspedisi;

class EkspedisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ekspedisi = Ekspedisi::all();
        return view('ekspedisi', ['ekspedisi' => $ekspedisi ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createEkspedisi');
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
            'NamaEkspedisi' => 'required',
            'KontakEkspedisi' => 'required|min:10',
            'AlamatEkspedisi' => 'required'
        ]);

         $ekspedisi = new Ekspedisi;
         $ekspedisi -> id = $request -> id;
         $ekspedisi -> NamaEkspedisi = $request -> NamaEkspedisi;
         $ekspedisi -> KontakEkspedisi = $request -> KontakEkspedisi;
         $ekspedisi -> AlamatEkspedisi = $request -> AlamatEkspedisi;

         $ekspedisi -> save();

        return redirect('/ekspedisi')->with('status', 'Data Berhasil Ditambahkan!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ekspedisi $ekspedisi
     * @return \Illuminate\Http\Response
     */
    public function edit(Ekspedisi $ekspedisi)
    {
        return view('editEkspedisi', ['ekspedisi'=> $ekspedisi]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ekspedisi  
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ekspedisi $ekspedisi) 
    {
        $request -> validate([
            'id' => 'required|min:1',
            'NamaEkspedisi' => 'required',
            'KontakEkspedisi' => 'required|min:10',
            'AlamatEkspedisi' => 'required'
        ]);
        
        Ekspedisi::where('id', $ekspedisi -> id)
        ->update([
            'id'=> $request -> id,
            'NamaEkspedisi' => $request -> NamaEkspedisi,
            'KontakEkspedisi' => $request -> KontakEkspedisi,
            'AlamatEkspedisi' => $request -> AlamatEkspedisi
         ]);

        return redirect('/ekspedisi')->with('status', 'Data Berhasil Diubah!');
    }

    public function delete(Ekspedisi $ekspedisi)
    {
        $ekspedisi -> delete();
        return redirect('/ekspedisi')->with('status', 'Data Berhasil Dihapus!');
    }
}
