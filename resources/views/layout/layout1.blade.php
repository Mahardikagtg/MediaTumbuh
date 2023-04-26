<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--========== BOX ICONS ==========-->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

    <!--========== CSS ==========-->
    <link rel="stylesheet" href="assets/css/styles.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <title>@yield('title')</title>
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
                    <li><i class='bx bx-moon change-theme' id="theme-button"></i></li>
                </ul>
            </div>

            <div class="nav__toggle" id="nav-toggle">
                <i class='bx bx-menu'></i>
            </div>
        </nav>
    </header>
    @yield('content')
        <!--========== CONTACT US ==========-->
        <section class="contact section bd-container" id="contact">
            <div class="contact__container bd-grid">
                <div class="contact__data">
                    <span class="section-subtitle contact__initial">Let's talk</span>
                    <h2 class="section-title contact__initial">Contact us</h2>
                    <p class="contact__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nulla
                        arcu, varius eget feugiat at, tincidunt in neque.</p>
                </div>

                <div class="contact__button">
                    <a href="#" class="button">Contact us now</a>
                </div>
            </div>
        </section>
    </main>

    <!--========== FOOTER ==========-->
    <footer class="footer section bd-container">
        <div class="footer__container bd-grid">
            <div class="footer__content">
                <a href="/index" class="footer__logo">MediaTumbuh</a>
                <span class="footer__description">Agricultural Platform</span>
                <div>
                    <a href="#" class="footer__social"><i class='bx bxl-facebook'></i></a>
                    <a href="#" class="footer__social"><i class='bx bxl-instagram'></i></a>
                    <a href="#" class="footer__social"><i class='bx bxl-twitter'></i></a>
                </div>
            </div>

            <div class="footer__content">
                <h3 class="footer__title">Services</h3>
                <ul>
                    <li><a href="#" class="footer__link">Delivery</a></li>
                    <li><a href="#" class="footer__link">Pricing</a></li>
                    <li><a href="#" class="footer__link">Products</a></li>
                    <li><a href="#" class="footer__link">Reserve your spot</a></li>
                </ul>
            </div>

            <div class="footer__content">
                <h3 class="footer__title">Information</h3>
                <ul>
                    <li><a href="#" class="footer__link">Event</a></li>
                    <li><a href="#" class="footer__link">Contact us</a></li>
                    <li><a href="#" class="footer__link">Privacy policy</a></li>
                    <li><a href="#" class="footer__link">Terms of services</a></li>
                </ul>
            </div>

            <div class="footer__content">
                <h3 class="footer__title">Address</h3>
                <ul>
                    <li>Surabaya - Indonesia</li>
                    <li>Universitas Airlangga</li>
                    <li>14045</li>
                    <li>mediatumbuh@gmail.com</li>
                </ul>
            </div>
        </div>

        <p class="footer__copy">&#169; 2021 MediaTumbuh. All right reserved</p>
    </footer>

    <!--========== SCROLL REVEAL ==========-->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!--========== MAIN JS ==========-->
    <script src="assets/js/main.js"></script>
</body>