<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--========== BOX ICONS ==========-->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

    <!--========== CSS ==========-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" rel="stylesheet" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">



    <title>Order History-{{Auth::user()->nama}}</title>
</head>

<body>

    <!--========== SCROLL TOP ==========-->
    <a href="#" class="scrolltop" id="scroll-top">
        <i class='bx bx-chevron-up scrolltop__icon'></i>
    </a>

    <!--========== HEADER ==========-->
    <header class="l-header" id="header">
        <nav class="nav bd-container">
            <a href="/" class="nav__logo">MediaTumbuh</a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    @yield('content-nav')
                    @if (session()->has('login_user_59ba36addc2b2f9401580f014c7f58ea4e30989d'))
                    <li class="nav__item">
                    <div class="dropdown">
                        <button class="dropbtn">{{Auth::user()->nama}}</button>
                        <div class="dropdown-content">
                            <a href="/profile">Profile</a>
                            <a href="/orderhistory">Order History</a>
                            <a href="/logout">Logout</a>
                        </div>
                    </div>
                    </li>
                    @else
                    <li class="nav__item"><a href="/login" class="nav__link">Login & Register</a></li>
                    @endif
                </ul>
            </div>

            <div class="nav__toggle" id="nav-toggle">
                <i class='bx bx-menu'></i>
            </div>
        </nav>
    </header>

    <!--========== HOME ==========-->
    <section class="menu section bd-container" id="menu">
            @foreach($order as $key => $ord)
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <?php $tempat = $barang[$key] -> FotoBarang;?>
                        <img src='/images/barang/{{$tempat}}' class='img-fluid rounded-start'>
                    </div>
                    <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title text-dark"><?php echo $barang[$key] -> NamaBarang?></h5>
                        <p class="card-text"><small class="text-muted">Transaction ID: <?php echo $ord->idtransaksi?></small></p>
                        <p class="card-text">Order Date: <?php echo $ord -> ordertimedate?></p>
                        <p class="card-text">Price: <?php echo $ord -> totalorder?></p>
                        <div class="card-footer bg-success">
                            <p class="card-text text-white">Status: Payment Validated</p>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            @endforeach
    </section>
</body>