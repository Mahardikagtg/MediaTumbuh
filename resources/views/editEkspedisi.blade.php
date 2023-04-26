@extends('layout/layout')
@section('title', 'EDIT DATA EKSPEDISI')
@section('content')
    <div class="form-c1">
        <form action="/ekspedisi/<?php echo $ekspedisi -> id ?>" method="post">
        @csrf
            <p class="my-2">ID Ekspedisi</p>
            <input name="id" class="form-control @error('id') is-invalid @enderror" type="text" value="<?php echo $ekspedisi -> id ?>">
            @error('id')<div class="invalid-feedback"><?php echo $message ?></div>@enderror
            <p class="my-2">Nama Ekspedisi</p>
            <input name="NamaEkspedisi" class="form-control @error('NamaEkspedisi') is-invalid @enderror" type="text" value="<?php echo $ekspedisi -> NamaEkspedisi ?>">
            @error('NamaEkspedisi')<div class="invalid-feedback"><?php echo $message ?></div>@enderror
            <p class="my-2">Kontak Ekspedisi</p>
            <input name="KontakEkspedisi" class="form-control @error('KontakEkspedisi') is-invalid @enderror" type="text" value="<?php echo $ekspedisi -> KontakEkspedisi ?>">
            @error('KontakEkspedisi')<div class="invalid-feedback"><?php echo $message ?></div>@enderror
            <p class="my-2">Alamat Ekspedisi</p>
            <input name="AlamatEkspedisi" class="form-control @error('AlamatEkspedisi') is-invalid @enderror" type="text" value="<?php echo $ekspedisi -> AlamatEkspedisi ?>">
            @error('AlamatEkspedisi')<div class="invalid-feedback"><?php echo $message ?></div>@enderror
            <button class="btn btn-primary my-2" type="submit">Submit Edit Form</button>
        </form>
    </div>
@endsection