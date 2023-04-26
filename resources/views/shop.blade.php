@extends('layout/layout1')
@section('title', 'Shop-MediaTumbuh')

@section('content-nav')
    <li class="nav__item"><a href="/" class="nav__link">Home</a></li>
    <li class="nav__item"><a href="/about" class="nav__link">About</a></li>
    <li class="nav__item"><a href="/shop" class="nav__link active-link">Shop</a></li>
    <li class="nav__item"><a href="/forum" class="nav__link">Forum</a></li>
@endsection

@section('content')
    <!--========== SHOP ==========-->
    <section class="menu section bd-container" id="menu">
        <span class="section-subtitle">Special</span>
        <h2 class="section-title">Agricultural Products</h2>

        <div class="menu__container bd-grid">
            @foreach($barang as $brg)
            <div class="menu__content" onclick="location.href='/<?php echo $brg -> id ?>';" style="cursor: pointer;">
                <?php
					$tempat = $brg['FotoBarang'];
					echo "<img src='/images/barang/$tempat'/>";
				?>
                <a href="/<?php echo $brg -> id ?>"  class="menu__name"><?php echo $brg -> NamaBarang ?></a>
                <span class="menu__detail">Agricultural Stuff</span>
                <span class="menu__preci">Rp <?php echo $brg -> HargaBarang ?></span>
                <a class="button menu__button" href="/buy/<?php echo $brg -> id ?>"><i class='bx bx-cart-alt'></i></a>
            </div>
            @endforeach
        </div>
    </section>
@endsection

<style type="text/css">

</style>

<script type="text/javascript">

</script>