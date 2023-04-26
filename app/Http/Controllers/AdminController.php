<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\AdminModel;

class AdminController extends Controller
{
    public function welcome()
    {
        return view('indexadmin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admin = AdminModel::all();
        return view('admin',['admin' => $admin]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createAdmin');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nambah = $request -> validate([
            'username' => 'required|min:5',
            'IDToko' => 'required',
            'NamaAdmin' => 'required',
            'password' => 'required|min:8',
            'JenisKelamin' => 'required|min:1',
            'AlamatAdmin' => 'required',
            'noHP' => 'required'
        ]);

        $admin = new AdminModel;
        $admin -> username = $request -> username;
        $admin -> IDToko = $request -> IDToko;
        $admin -> NamaAdmin = $request -> NamaAdmin;
        $admin -> password = Hash::make($request-> password);
        $admin -> JenisKelamin = $request -> JenisKelamin;
        $admin -> AlamatAdmin = $request -> AlamatAdmin;
        $admin -> noHP = $request -> noHP;
        $admin -> IsActive = 1;

        $admin -> save();

        return redirect('/admin')->with('status', 'Data Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AdminModel  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(AdminModel $admin)
    {
        return view('getAdmin',['admin' => $admin]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $username
     * @return \Illuminate\Http\Response
     */
    public function edit(AdminModel $admin)
    {
        return view('editAdmin',['admin' => $admin]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $username
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AdminModel $admin)
    {
        $updatedong = $request -> validate([
            'username' => 'required|min:5',
            'IDToko' => 'required',
            'NamaAdmin' => 'required',
            'JenisKelamin' => 'required|min:1',
            'AlamatAdmin' => 'required',
            'noHP' => 'required'
        ]);

        AdminModel::where('username', $admin -> username)
            ->update([
                'username' => $request -> username,
                'IDToko' => $request -> IDToko,
                'NamaAdmin' => $request -> NamaAdmin,
                'JenisKelamin' => $request -> JenisKelamin,
                'AlamatAdmin' => $request -> AlamatAdmin,
                'noHP' => $request -> noHP
            ]);
        
        return redirect('/admin')->with('status', 'Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $username
     * @return \Illuminate\Http\Response
     */
    public function enable(AdminModel $admin)
    {
        if($admin -> IsActive == "1"){
            AdminModel::where('username', $admin -> username)
                ->update([
                    'IsActive' => 0       
                ]);
        }
        elseif($admin -> IsActive == "0"){
            AdminModel::where('username', $admin -> username)
                ->update([
                    'IsActive' => 1               
                ]);
        }

        return redirect('/admin')->with('status', 'Data Berhasil Diubah!');
    }
}
