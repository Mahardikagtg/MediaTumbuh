@extends('layout/layout')
@section('title', 'DATA ADMIN')
@section('content')
<h3>Data Admin</h3>
	<table class="table">
    <thead>
        <tr>
        <th scope="col">ID Transaksi</th>
        <th scope="col">Order Date</th>
        <th scope="col">Username</th>
        <th scope="col">ID Barang</th>
        <th scope="col">Total Order</th>
        </tr>
    </thead>
    <tbody>
    @foreach($transaksi as $adm)
        <tr>
        <th scope="row"><?php echo $adm->idtransaksi ?></th>
        <td><?php echo $adm->ordertimedate?></td>
        <td><?php echo $adm->username ?></td>
        <td><?php echo $adm->idbarang ?></td>
        <td><?php echo $adm->totalorder ?></td>
        </tr>
    </tbody>
    @endforeach
    <tfoot>
        <tr>
        <td></td>
        <td></td>
        <td></td>
        <td>Total Pembelian:</td>
        <td>
        <?php
            $aw=0;
            foreach ($transaksi as $adm) {
                $aw = $aw+($adm->totalorder);
            }
            echo "Rp $aw";
        ?>
        </td>
        </tr>
  </tfoot>
</table>
@endsection