@extends('layout/layout')
@section('title', 'CREATE DATA TOKO')
@section('content')
    <div class="form-c1">
        <form action="/ekspedisi" method="post">
        @csrf
            <p class="my-2">ID Ekspedisi</p>
            <input class="form-control @error('id') is-invalid @enderror" type="text" placeholder="" name="id">
            @error('id')<div class="invalid-feedback"><?php echo $message ?></div>@enderror
            <p class="my-2">Nama Ekspedisi</p>
            <input class="form-control @error('NamaEkspedisi') is-invalid @enderror" type="text" placeholder="" name="NamaEkspedisi">
            @error('NamaEkspedisi')<div class="invalid-feedback"><?php echo $message ?></div>@enderror
            <p class="my-2">Kontak Ekspedisi</p>
            <input class="form-control @error('KontakEkspedisi') is-invalid @enderror" type="text" placeholder="" name="KontakEkspedisi">
            @error('KontakEkspedisi')<div class="invalid-feedback"><?php echo $message ?></div>@enderror
            <p class="my-2">Alamat Ekspedisi</p>
            <input class="form-control @error('AlamatEkspedisi') is-invalid @enderror" type="text" placeholder="" name="AlamatEkspedisi">
            @error('AlamatEkspedisi')<div class="invalid-feedback"><?php echo $message ?></div>@enderror
            <button class="btn btn-primary my-2" type="submit">Submit Form</button>
        </form>
    </div>
@endsection