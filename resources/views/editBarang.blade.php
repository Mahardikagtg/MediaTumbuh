@extends('layout/layout')
@section('title', 'CREATE DATA BARANG')
@section('content')
    <div class="form-c1">
        <form action="/barang/<?php echo $barang -> id ?>" method="post" enctype="multipart/form-data">
        @csrf
            <input class="form-control" type="hidden" placeholder="" name="id" value="<?php echo $barang -> id ?>">
            <p class="my-2">ID Barang</p>
            <input class="form-control @error('id') is-invalid @enderror" type="text" placeholder="" name="id" value="<?php echo $barang -> id ?>" disabled>
            @error('id')<div class="invalid-feedback"><?php echo $message ?></div>@enderror
            <p class="my-2">Nama Barang</p>
            <input class="form-control @error('NamaBarang') is-invalid @enderror" type="text" placeholder="" name="NamaBarang" value="<?php echo $barang -> NamaBarang ?>">
            @error('NamaBarang')<div class="invalid-feedback"><?php echo $message ?></div>@enderror
            <p class="my-2">Deskripsi Barang</p>
            <input class="form-control @error('DeskripsiBarang') is-invalid @enderror" type="textarea" placeholder="" name="DeskripsiBarang" value="<?php echo $barang -> DeskripsiBarang ?>">
            @error('DeskripsiBarang')<div class="invalid-feedback"><?php echo $message ?></div>@enderror
            <p class="my-2">Stok Barang</p>
            <input class="form-control @error('StokBarang') is-invalid @enderror" type="text" placeholder="" name="StokBarang" value="<?php echo $barang -> StokBarang ?>">
            @error('StokBarang')<div class="invalid-feedback"><?php echo $message ?></div>@enderror
            <p class="my-2">Harga</p>
            <input class="form-control @error('HargaBarang') is-invalid @enderror" type="text" placeholder="Rp" name="HargaBarang" value="<?php echo $barang -> HargaBarang ?>">
            @error('HargaBarang')<div class="invalid-feedback"><?php echo $message ?></div>@enderror
            <p class="my-2">Foto Barang</p>
            <?php 
			if ($barang['FotoBarang']) {
				$tempat = $barang['FotoBarang'];
                $id = $barang['id'];
				echo "<img src='/images/barang/$id/$tempat' width='200px' height='200px'/>";
			} else {
				echo "<img src='/images/barang/kosong.png' width='200px' height='200px'/>";
			}
		    ?>
            <input class="form-control @error('FotoBarang') is-invalid @enderror" type="file" placeholder="" name="FotoBarang" value="<?php echo $barang -> FotoBarang ?>">
            @error('FotoBarang')<div class="invalid-feedback"><?php echo $message ?></div>@enderror
            <button class="btn btn-primary my-2" type="submit">Submit Form</button>
        </form>
    </div>
@endsection