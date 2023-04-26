@extends('layout/layout')
@section('title', 'DETAIL DATA ADMIN')
@section('content')
    <div class="form-c1">
        @csrf
        <p class="my-2">ID Admin</p>
        <input class="form-control" type="text" placeholder="<?php echo $admin -> username ?>" disabled>
        <p class="my-2">ID Toko</p>
        <input class="form-control" type="text" placeholder="<?php echo $admin -> IDToko ?>" disabled>
        <p class="my-2">Nama</p>
        <input class="form-control" type="text" placeholder="<?php echo $admin -> NamaAdmin ?>" disabled>
        <p class="my-2">Jenis Kelamin</p>
        <input class="form-control" type="text" placeholder="<?php echo $admin -> JenisKelamin ?>" disabled>
        <p class="my-2">Alamat Admin</p>
        <input class="form-control" type="text" placeholder="<?php echo $admin -> AlamatAdmin ?>" disabled>
        <p class="my-2">Nomor HP</p>
        <input class="form-control" type="text" placeholder="<?php echo $admin -> noHP ?>" disabled>
        <p class="my-2">Aktif</p>
        <input class="form-control" type="text" placeholder="<?php echo $admin -> IsActive ?>" disabled>
    </div>
@endsection