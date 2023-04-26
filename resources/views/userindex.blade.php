@extends('layout/layout')
@section('title', 'DATA ADMIN')
@section('content')
<h3>Data User</h3>
	<table class="table">
    <thead>
        <tr>
        <th scope="col">Username</th>
        <th scope="col">Email</th>
        <th scope="col">Nama</th>
        <th scope="col">Alamat</th>
        <th scope="col">Nomor HP</th>
        <th scope="col">Foto</th>
        </tr>
    </thead>
    <tbody>
    @foreach($user as $adm)
        <tr>
        <th scope="row"><?php echo $adm->username ?></th>
        <td><small><?php echo $adm->email ?></small></td>
        <td><small><?php echo $adm->nama ?></small></td>
        <td><small><?php echo $adm->alamat ?></small></td>
        <td><small><?php echo $adm->nomorhp ?></small></td>
        @if($adm->foto)
        <td><?php $tempat = $adm->foto; $id = $adm->username; echo "<img src='/images/user/$id/$tempat'"?></td>
        @else
        <td><?php echo "<img src='/images/user/kosong.png'"?></td>
        @endif
        </tr>
    @endforeach
    </tbody>
</table>
@endsection

<style>
img {
    width: 100px;
    height: 100px;
}
</style>