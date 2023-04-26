@extends('layout/layout')
@section('title', 'DATA EKSPEDISI')
@section('content')
<h3>Data Ekspedisi</h3>
	<div class="tambah">
	<a href="/ekspedisi/create" class="btn btn-primary" role="button">Tambah</a>
    @if (session('status'))
    <div class="alert alert-success my-2">
        {{ session('status') }}
    </div>
    @endif
	</div>
	<table class="table">
    <thead>
        <tr>
        <th scope="col">IDEkspedisi</th>
        <th scope="col">Nama Ekspedisi</th>
        <th scope="col">Kontak Ekspedisi</th>
        <th scope="col">Alamat Ekspedisi</th>
        <th scope="col">Action</th>

        </tr>
    </thead>
    <tbody>
    @foreach($ekspedisi as $eks)
        <tr>
        <th scope="row"><?php echo $eks->id ?></th>
        <td><?php echo $eks->NamaEkspedisi ?></td>
        <td><?php echo $eks->KontakEkspedisi ?></td>
        <td><?php echo $eks->AlamatEkspedisi ?></td>
        <td>
            <a href="/ekspedisi/<?php echo $eks['id']?>/edit" class="badge bg-success my-1">Edit</a>
            <a href="/ekspedisi/<?php echo $eks['id']?>/delete" class="badge bg-danger my-1">Delete</a>
        </td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection