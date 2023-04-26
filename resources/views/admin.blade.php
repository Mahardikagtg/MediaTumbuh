@extends('layout/layout')
@section('title', 'DATA ADMIN')
@section('content')
<h3>Data Admin</h3>
	<div class="tambah">
	<a href="/admin/create" class="btn btn-primary" role="button">Tambah</a>
    @if (session('status'))
    <div class="alert alert-success my-2">
        {{ session('status') }}
    </div>
    @endif
	</div>
	<table class="table">
    <thead>
        <tr>
        <th scope="col">IDAdmin</th>
        <th scope="col">Nama</th>
        <th scope="col">Alamat</th>
        <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($admin as $adm)
        @if($adm -> IsActive == "1")
        <tr>
        <th scope="row"><?php echo $adm->username ?></th>
        <td><?php echo $adm->NamaAdmin ?></td>
        <td><?php echo $adm->AlamatAdmin ?></td>
        <td>
            <a href="/admin/<?php echo $adm['username']?>" class="badge bg-primary my-1">Detail</a>
            <a href="/admin/<?php echo $adm['username']?>/edit" class="badge bg-success my-1">Edit</a>
            <a href="/admin/<?php echo $adm['username']?>/active" class="badge bg-success my-1">Disable</a>
        </td>
        </tr>
        @elseif ($adm -> IsActive == "0")
        <tr>
        <th scope="row"><?php echo $adm->username ?></th>
        <td><?php echo $adm->NamaAdmin ?></td>
        <td><?php echo $adm->AlamatAdmin ?></td>
        <td>
            <p href="" class="badge bg-danger my-1">Detail</p>
            <p href="" class="badge bg-danger my-1">Edit</p>
            <a href="/admin/<?php echo $adm['username']?>/active" class="badge bg-danger my-1">Enable</a>
        </td>
        </tr>
        @endif
    @endforeach
    </tbody>
</table>
@endsection