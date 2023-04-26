@extends('layout/layout1')
@section('title', 'About-MediaTumbuh')

@section('content-nav')
    <li class="nav__item"><a href="/" class="nav__link">Home</a></li>
    <li class="nav__item"><a href="/about" class="nav__link active-link">About</a></li>
    <li class="nav__item"><a href="/shop" class="nav__link">Shop</a></li>
    <li class="nav__item"><a href="/forum" class="nav__link">Forum</a></li>
@endsection

@section('content')
    <main class="l-main">
        <!--========== ABOUT ==========-->
        <section class="about section bd-container" id="about">
            <div class="about__container  bd-grid">
                <div class="about__data">
                    <span class="section-subtitle about__initial">About us</span>
                    <h2 class="section-title about__initial">We provide the best <br>Agricultural products & services
                    </h2>
                    <p class="about__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nulla
                        arcu, varius eget feugiat at, tincidunt in neque. Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit. Nulla facilisi. Quisque dui erat, lobortis non lacinia a, egestas sed arcu
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nulla
                        arcu, varius eget feugiat at, tincidunt in neque. Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit. Nulla facilisi. Quisque dui erat, lobortis non lacinia a, egestas sed arcu.
                    </p>
                </div>

                <img src="assets/img/eduardo-prim-3u51-uLQICc-unsplash.jpg" alt="" class="about__img">
            </div>
        </section>
@endsection