@extends('layout/layout1')
@section('title', 'Description-MediaTumbuh')
@section('content-nav')
    <li class="nav__item"><a href="/" class="nav__link">Home</a></li>
    <li class="nav__item"><a href="/about" class="nav__link">About</a></li>
    <li class="nav__item"><a href="/shop" class="nav__link">Shop</a></li>
    <li class="nav__item"><a href="/forum" class="nav__link">Forum</a></li>
@endsection
@section('content')
<main class="container">
    <div class="left-column">
       <?php
			$tempat = $barang['FotoBarang'] ;
			echo "<img src='/images/barang/$tempat'>";
		?>
    </div>
 
    <!-- Right Column -->
    <div class="right-column">
 
    <!-- Product Description -->
    <div class="product-description">
        <span>Agricultural Stuff</span>
        <h1><?php echo $barang -> NamaBarang ?></h1>
        <p><?php echo $barang -> DeskripsiBarang ?></p>
    </div>

    <div class="product-price">
        <span>Stok: <?php echo $barang -> StokBarang ?></span>
    </div>
    <!-- Product Configuration -->
    <div class="product-configuration">
 
    <!-- Product Pricing -->
    <div class="product-price">
        <span>Rp <?php echo $barang -> HargaBarang ?></span>
        <a href="/buy/<?php echo $barang -> id ?>" class="cart-btn">Buy</a>
    </div>
</main>
@endsection

<style type="text/css">

.container {
  max-width: 1200px;
  margin: 10% auto;
  padding: 15px;
  display: flex;
}

/* Columns */
.left-column {
  width: 60%;
  position: relative;
}
 
.right-column {
  width: 35%;
  margin-top: 60px;
}

.left-column img {
  left: 0;
  top: 0;
  opacity: 1;
  transition: all 0.3s ease;
}

.product-description {
  border-bottom: 1px solid #E1E8EE;
  margin-bottom: 20px;
}
.product-description span {
  font-size: 12px;
  color: #358ED7;
  letter-spacing: 1px;
  text-transform: uppercase;
  text-decoration: none;
}
.product-description h1 {
  font-weight: 300;
  font-size: 52px;
  color: #43484D;
  letter-spacing: -2px;
}
.product-description p {
  font-size: 16px;
  font-weight: 300;
  color: #86939E;
  line-height: 24px;
}

/* Product Price */
.product-price {
  display: flex;
  align-items: center;
}
 
.product-price span {
  font-size: 26px;
  font-weight: 300;
  color: #43474D;
  margin-right: 20px;
}
 
.cart-btn {
  display: inline-block;
  background-color: #7DC855;
  border-radius: 6px;
  font-size: 16px;
  color: #FFFFFF;
  text-decoration: none;
  padding: 12px 30px;
  transition: all .5s;
}
.cart-btn:hover {
  background-color: #64af3d;
}
</style>

<script type="text/javascript">

</script>