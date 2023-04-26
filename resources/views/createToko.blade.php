@extends('layout/layout')
@section('title', 'CREATE DATA TOKO')
@section('content')
    <div class="form-c1">
        <form action="/toko" method="post">
        @csrf
            <p class="my-2">ID Toko</p>
            <input class="form-control @error('idtoko') is-invalid @enderror" type="text" placeholder="" name="idtoko">
            @error('idtoko')<div class="invalid-feedback"><?php echo $message ?></div>@enderror
            <p class="my-2">Nama Toko</p>
            <input class="form-control @error('NamaToko') is-invalid @enderror" type="text" placeholder="" name="NamaToko">
            @error('NamaToko')<div class="invalid-feedback"><?php echo $message ?></div>@enderror
            <p class="my-2">Alamat Toko</p>
            <input class="form-control @error('AlamatToko') is-invalid @enderror" type="text" placeholder="" name="AlamatToko">
            @error('AlamatToko')<div class="invalid-feedback"><?php echo $message ?></div>@enderror
            <p class="my-2">Nomor Pengaduan Toko</p>
            <input class="form-control @error('NoPengaduanToko') is-invalid @enderror" type="text" placeholder="" name="NoPengaduanToko">
            @error('NoPengaduanToko')<div class="invalid-feedback"><?php echo $message ?></div>@enderror
            <p class="my-2">Nomor Rekening Toko</p>
            <input class="form-control @error('NoRekeningToko') is-invalid @enderror" type="text" placeholder="" name="NoRekeningToko">
            @error('NoRekeningToko')<div class="invalid-feedback"><?php echo $message ?></div>@enderror
            <button class="btn btn-primary my-2" type="submit">Submit Form</button>
        </form>
    </div>
@endsection