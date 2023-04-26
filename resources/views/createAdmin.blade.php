@extends('layout/layout')
@section('title', 'CREATE DATA ADMIN')
@section('content')
    <div class="form-c1">
        <form action="/admin" method="post">
        @csrf
            <p class="my-2">ID Admin</p>
            <input class="form-control @error('username') is-invalid @enderror" type="text" placeholder="" name="username">
            @error('username')<div class="invalid-feedback"><?php echo $message ?></div>@enderror
            <p class="my-2">ID Toko</p>
            <input class="form-control @error('IDToko') is-invalid @enderror" type="text" placeholder="" name="IDToko">
            @error('IDToko')<div class="invalid-feedback"><?php echo $message ?></div>@enderror
            <p class="my-2">Nama</p>
            <input class="form-control @error('NamaAdmin') is-invalid @enderror" type="text" placeholder="" name="NamaAdmin">
            @error('NamaAdmin')<div class="invalid-feedback"><?php echo $message ?></div>@enderror
            <p class="my-2">Password</p>
            <input class="form-control @error('password') is-invalid @enderror" type="password" placeholder="" name="password">
            @error('password')<div class="invalid-feedback"><?php echo $message ?></div>@enderror
            <p class="my-2">Jenis Kelamin</p>
            <input class="form-control @error('JenisKelamin') is-invalid @enderror" type="text" placeholder="L/P" name="JenisKelamin">
            @error('JenisKelamin')<div class="invalid-feedback"><?php echo $message ?></div>@enderror
            <p class="my-2">Alamat Admin</p>
            <input class="form-control @error('AlamatAdmin') is-invalid @enderror" type="text" placeholder="" name="AlamatAdmin">
            @error('AlamatAdmin')<div class="invalid-feedback"><?php echo $message ?></div>@enderror
            <p class="my-2">Nomor HP</p>
            <input class="form-control @error('noHP') is-invalid @enderror" type="text" placeholder="" name="noHP">
            @error('noHP')<div class="invalid-feedback"><?php echo $message ?></div>@enderror
            <button class="btn btn-primary my-2" type="submit">Submit Form</button>
        </form>
    </div>
@endsection