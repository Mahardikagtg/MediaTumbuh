@extends('layout/layout')
@section('title', 'DATA BARANG')
@section('content')
<h3>Data Barang</h3>
	<div class="tambah">
	<a href="/barang/create" class="btn btn-primary" role="button">Tambah</a>
    @if (session('status'))
    <div class="alert alert-success my-2">
        {{ session('status') }}
    </div>
    @endif
	</div>
	<table class="table">
    <thead>
        <tr>
        <th scope="col">IDBarang</th>
        <th scope="col">Nama Barang</th>
        <th scope="col">Stok Barang</th>
        <th scope="col">Harga Barang</th>
        <th scope="col">Action</th>

        </tr>
    </thead>
    <tbody>
    @foreach($barang as $barang)
        <tr>
        <th scope="row"><?php echo $barang->id ?></th>
        <td><?php echo $barang->NamaBarang ?></td>
        <td><?php echo $barang->StokBarang ?></td>
        <td><?php echo $barang->HargaBarang ?></td>
        <td>
            <a href="/barang/<?php echo $barang['id']?>" class="badge bg-primary my-1">Detail</a>
            <a href="/barang/<?php echo $barang['id']?>/edit" class="badge bg-success my-1">Edit</a>
        </td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection