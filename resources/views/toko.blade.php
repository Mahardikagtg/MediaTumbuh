@extends('layout/layout')
@section('title', 'DATA TOKO')
@section('content')
<h3>Data Toko</h3>
	<div class="tambah">
	<a href="/toko/create" class="btn btn-primary" role="button">Tambah</a>
    @if (session('status'))
    <div class="alert alert-success my-2">
        {{ session('status') }}
    </div>
    @endif
	</div>
	<table class="table">
    <thead>
        <tr>
        <th scope="col">IDToko</th>
        <th scope="col">Nama Toko</th>
        <th scope="col">Alamat Toko</th>
        <th scope="col">Action</th>

        </tr>
    </thead>
    <tbody>
    @foreach($toko as $tko)
        @if($tko -> IsActive == "1")
        <tr>
        <th scope="row"><?php echo $tko->idtoko ?></th>
        <td><?php echo $tko->NamaToko ?></td>
        <td><?php echo $tko->AlamatToko ?></td>
        <td>
            <a href="/toko/<?php echo $tko['idtoko']?>" class="badge bg-primary my-1">Detail</a>
            <a href="/toko/<?php echo $tko['idtoko']?>/edit" class="badge bg-success my-1">Edit</a>
            <a href="/toko/<?php echo $tko['idtoko']?>/active" class="badge bg-success my-1">Disable</a>
        </td>
        </tr>
        @elseif ($tko -> IsActive == "0")
        <tr>
        <th scope="row"><?php echo $tko->idtoko ?></th>
        <td><?php echo $tko->NamaToko ?></td>
        <td><?php echo $tko->AlamatToko ?></td>
        <td>
            <p href="" class="badge bg-danger my-1">Detail</p>
            <p href="" class="badge bg-danger my-1">Edit</p>
            <a href="/toko/<?php echo $tko['idtoko']?>/active" class="badge bg-danger my-1">Enable</a>
        </td>
        </tr>
        @endif
    @endforeach
    </tbody>
</table>
@endsection