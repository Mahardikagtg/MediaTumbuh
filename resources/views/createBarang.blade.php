@extends('layout/layout')
@section('title', 'CREATE DATA BARANG')
@section('content')
    <div class="form-c1">
        <form action="/barang" method="post" enctype="multipart/form-data">
        @csrf
            <p class="my-2">ID Barang</p>
            <input class="form-control @error('id') is-invalid @enderror" type="text" placeholder="" name="id">
            @error('id')<div class="invalid-feedback"><?php echo $message ?></div>@enderror
            <p class="my-2">Nama Barang</p>
            <input class="form-control @error('NamaBarang') is-invalid @enderror" type="text" placeholder="" name="NamaBarang">
            @error('NamaBarang')<div class="invalid-feedback"><?php echo $message ?></div>@enderror
            <p class="my-2">Deskripsi Barang</p>
            <input class="form-control @error('DeskripsiBarang') is-invalid @enderror" type="textarea" placeholder="" name="DeskripsiBarang">
            @error('DeskripsiBarang')<div class="invalid-feedback"><?php echo $message ?></div>@enderror
            <p class="my-2">Stok Barang</p>
            <input class="form-control @error('StokBarang') is-invalid @enderror" type="text" placeholder="" name="StokBarang">
            @error('StokBarang')<div class="invalid-feedback"><?php echo $message ?></div>@enderror
            <p class="my-2">Harga</p>
            <input class="form-control @error('HargaBarang') is-invalid @enderror" type="text" placeholder="Rp" name="HargaBarang">
            @error('HargaBarang')<div class="invalid-feedback"><?php echo $message ?></div>@enderror
            <p class="my-2">Foto Barang</p>
            <input class="form-control @error('FotoBarang') is-invalid @enderror" type="file" placeholder="" name="FotoBarang">
            @error('FotoBarang')<div class="invalid-feedback"><?php echo $message ?></div>@enderror
            <button class="btn btn-primary my-2" type="submit">Submit Form</button>
        </form>
    </div>
@endsection