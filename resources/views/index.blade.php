@extends('layout/layout1')
@section('title', 'MediaTumbuh')

@section('content-nav')
    <li class="nav__item"><a href="/" class="nav__link active-link">Home</a></li>
    <li class="nav__item"><a href="/about" class="nav__link">About</a></li>
    <li class="nav__item"><a href="/shop" class="nav__link">Shop</a></li>
    <li class="nav__item"><a href="/forum" class="nav__link">Forum</a></li>
@endsection
@section('content')
    <main class="l-main">
    <!--========== HOME ==========-->
    <section class="home" id="home">
        <div class="home__container bd-container bd-grid">
            <div class="home__data">
                <h1 class="home__title">MediaTumbuh</h1>
                <h2 class="home__subtitle">Let's join us and <br> grow together.</h2>
                <a href="/shop" class="button">Go to shop</a>
            </div>
            <img src="assets/img/jed-owen-1JgUGDdcWnM-unsplash.jpg" alt="" class="home__img">
        </div>
    </section>

    <!--========== ABOUT ==========-->
    <section class="about section bd-container" id="about">
        <div class="about__container  bd-grid">
            <div class="about__data">
                <span class="section-subtitle about__initial">About us</span>
                <h2 class="section-title about__initial">We provide the best <br>Agricultural products & services
                </h2>
                <p class="about__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nulla
                    arcu, varius eget feugiat at, tincidunt in neque. Lorem ipsum dolor sit amet, consectetur
                    adipiscing elit. Nulla facilisi. Quisque dui erat, lobortis non lacinia a, egestas sed arcu..
                </p>
                <a href="/about" class="button">Explore</a>
            </div>

            <img src="assets/img/eduardo-prim-3u51-uLQICc-unsplash.jpg" alt="" class="about__img">
        </div>
    </section>
@endsection
