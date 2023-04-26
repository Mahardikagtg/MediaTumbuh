@extends('layout/layout')
@section('title', 'EDIT DATA ADMIN')
@section('content')
    <div class="form-c1">
        <form action="/admin/<?php echo $admin -> username ?>" method="post">
        @csrf
            <p class="my-2">ID Admin</p>
            <input name="username" class="form-control @error('username') is-invalid @enderror" type="text" value="<?php echo $admin -> username ?>">
            @error('username')<div class="invalid-feedback"><?php echo $message ?></div>@enderror
            <p class="my-2">ID Toko</p>
            <input name="IDToko" class="form-control @error('IDToko') is-invalid @enderror" type="text" value="<?php echo $admin -> IDToko ?>">
            @error('IDToko')<div class="invalid-feedback"><?php echo $message ?></div>@enderror
            <p class="my-2">Nama</p>
            <input name="NamaAdmin" class="form-control @error('NamaAdmin') is-invalid @enderror" type="text" value="<?php echo $admin -> NamaAdmin ?>">
            @error('NamaAdmin')<div class="invalid-feedback"><?php echo $message ?></div>@enderror
            <p class="my-2">Jenis Kelamin</p>
            <input name="JenisKelamin" class="form-control @error('JenisKelamin') is-invalid @enderror" type="text" value="<?php echo $admin -> JenisKelamin ?>">
            @error('JenisKelamin')<div class="invalid-feedback"><?php echo $message ?></div>@enderror
            <p class="my-2">Alamat Admin</p>
            <input name="AlamatAdmin" class="form-control @error('AlamatAdmin') is-invalid @enderror" type="text" value="<?php echo $admin -> AlamatAdmin ?>">
            @error('AlamatAdmin')<div class="invalid-feedback"><?php echo $message ?></div>@enderror
            <p class="my-2">Nomor HP</p>
            <input name="noHP" class="form-control @error('noHP') is-invalid @enderror" type="text" value="<?php echo $admin -> noHP ?>">
            @error('noHP')<div class="invalid-feedback"><?php echo $message ?></div>@enderror
            <button class="btn btn-primary my-2" type="submit">Submit Edit Form</button>
        </form>
    </div>
@endsection