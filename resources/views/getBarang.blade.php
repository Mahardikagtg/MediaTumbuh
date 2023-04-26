@extends('layout/layout')
@section('title', 'DETAIL DATA ADMIN')
@section('content')
    <div class="form-c1">
        @csrf
        <p class="my-2">ID Barang</p>
        <input class="form-control" type="text" placeholder="<?php echo $barang -> id ?>" disabled>
        <p class="my-2">Nama Barang</p>
        <input class="form-control" type="text" placeholder="<?php echo $barang -> NamaBarang ?>" disabled>
        <p class="my-2">Deskripsi Barang</p>
        <input class="form-control" type="text" placeholder="<?php echo $barang -> DeskripsiBarang ?>" disabled>
        <p class="my-2">Stok Barang</p>
        <input class="form-control" type="text" placeholder="<?php echo $barang -> StokBarang ?>" disabled>
        <p class="my-2">Harga</p>
        <input class="form-control" type="text" placeholder="<?php echo $barang -> HargaBarang ?>" disabled>
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
    </div>
@endsection