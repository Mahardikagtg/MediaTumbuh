@extends('layout/layout')
@section('title', 'EDIT DATA TOKO')
@section('content')
    <div class="form-c1">
        <form action="/toko/<?php echo $toko -> idtoko ?>" method="post">
        @csrf
            <p class="my-2">ID Toko</p>
            <input name="idtoko" class="form-control @error('idtoko') is-invalid @enderror" type="text" value="<?php echo $toko -> idtoko ?>">
            @error('idtoko')<div class="invalid-feedback"><?php echo $message ?></div>@enderror
            <p class="my-2">Nama</p>
            <input name="NamaToko" class="form-control @error('NamaToko') is-invalid @enderror" type="text" value="<?php echo $toko -> NamaToko ?>">
            @error('NamaToko')<div class="invalid-feedback"><?php echo $message ?></div>@enderror
            <p class="my-2">Alamat Toko</p>
            <input name="AlamatToko" class="form-control @error('AlamatToko') is-invalid @enderror" type="text" value="<?php echo $toko -> AlamatToko ?>">
            @error('AlamatToko')<div class="invalid-feedback"><?php echo $message ?></div>@enderror
            <p class="my-2">Nomor Pengaduan Toko</p>
            <input name="NoPengaduanToko" class="form-control @error('NoPengaduanToko') is-invalid @enderror" type="text" value="<?php echo $toko -> NoPengaduanToko ?>">
            @error('NoPengaduanToko')<div class="invalid-feedback"><?php echo $message ?></div>@enderror
            <p class="my-2">Nomor Rekening Toko</p>
            <input name="NoRekeningToko" class="form-control @error('NoRekeningToko') is-invalid @enderror" type="text" value="<?php echo $toko -> NoRekeningToko ?>">
            @error('NoRekeningToko')<div class="invalid-feedback"><?php echo $message ?></div>@enderror
            <button class="btn btn-primary my-2" type="submit">Submit Edit Form</button>
        </form>
    </div>
@endsection