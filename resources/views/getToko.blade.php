@extends('layout/layout')
@section('title', 'DETAIL DATA TOKO')
@section('content')
    <div class="form-c1">
        @csrf
        <p class="my-2">ID Toko</p>
        <input class="form-control" type="text" placeholder="<?php echo $toko -> idtoko ?>" disabled>
        <p class="my-2">Nama Toko</p>
        <input class="form-control" type="text" placeholder="<?php echo $toko -> NamaToko ?>" disabled>
        <p class="my-2">Alamat Toko</p>
        <input class="form-control" type="text" placeholder="<?php echo $toko -> AlamatToko ?>" disabled>
        <p class="my-2">Nomor Pengaduan Toko</p>
        <input class="form-control" type="text" placeholder="<?php echo $toko -> NoPengaduanToko ?>" disabled>
        <p class="my-2">Nomor Rekening Toko</p>
        <input class="form-control" type="text" placeholder="<?php echo $toko -> NoRekeningToko ?>" disabled>
        <p class="my-2">Aktif</p>
        <input class="form-control" type="text" placeholder="<?php echo $toko -> IsActive ?>" disabled>
    </div>
@endsection