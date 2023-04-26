<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Register-MediaTumbuh</title>
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <!--========== HEADER ==========-->
    <header class="l-header" id="header">
        <nav class="nav bd-container">
            <a href="/" class="nav__logo">MediaTumbuh</a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item"><a href="/" class="nav__link">Home</a></li>
                    <li class="nav__item"><a href="/about" class="nav__link">About</a></li>
                    <li class="nav__item"><a href="/shop" class="nav__link">Shop</a></li>
                    <li class="nav__item"><a href="/forum" class="nav__link">Forum</a></li>
                    <li class="nav__item"><a href="/login" class="nav__link active-link">Login & Register</a></li>

                    <li><i class='bx bx-moon change-theme' id="theme-button"></i></li>
                </ul>
            </div>

            <div class="nav__toggle" id="nav-toggle">
                <i class='bx bx-menu'></i>
            </div>
        </nav>
    </header>

    <main>
        <!-- <h2>Welcome to MediaTumbuh</h2> -->
        <div class="container" id="container">
            <div class="form-container sign-up-container">
                <form action="{{url('register')}}" method="POST" id="register">
                @csrf
                    <div class="new">
                        <h2>Create Account</h2>
                    </div>
                    <span class="new">use your email for registration</span>
                    <input type="username" placeholder="Username" name="id"/>
                    @if($errors->has('id'))
                    <span class="error">{{ $errors->first('id') }}</span>
                    @endif
                    <input type="email" placeholder="Email" name="email"/>
                    @if($errors->has('email'))
                    <span class="error">{{ $errors->first('email') }}</span>
                    @endif
                    <input type="text" placeholder="Name" name="nama"/>
                    @if($errors->has('nama'))
                    <span class="error">{{ $errors->first('nama') }}</span>
                    @endif
                    <input type="password" placeholder="Password" name="password"/>
                    @if($errors->has('password'))
                    <span class="error">{{ $errors->first('password') }}</span>
                    @endif
                    <button>Sign Up</button>
                </form>
            </div>
            <div class="form-container sign-in-container">
                <form action="{{url('proses_login')}}" method="POST" id="logForm">
                    {{ csrf_field() }}
                    <div class="new">
                        <h1>Sign in</h1>
                    </div>
                    {{-- Error Alert --}}
                    @if(session('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{session('error')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    <div class="social-container">
                        <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                        <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <span class="new">or use your account</span>
                    <input type="username" name="username" placeholder="Username" />
                    @if($errors->has('username'))
                    <span class="error">{{ $errors->first('username') }}</span>
                    @endif
                    <input type="password" name="password" placeholder="Password" />
                    @if($errors->has('password'))
                    <span class="error">{{ $errors->first('password') }}</span>
                    @endif
                    <button>Sign In</button>
                </form>
            </div>
            <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-panel overlay-left">
                        <h1>Welcome Back!</h1>
                        <p>To keep connected with us please <br>login with your personal info</p>
                        <button class="ghost" id="signIn">Sign In</button>
                    </div>
                    <div class="overlay-panel overlay-right">
                        <h1>Hello, Friend!</h1>
                        <p>Enter your personal details <br> and start journey with us</p>
                        <button class="ghost" id="signUp">Sign Up</button>
                    </div>
                </div>
            </div>
        </div>
    </main>

</body>
<!--========== FOOTER ==========-->
<footer>
    <p class="">&#169; 2021 MediaTumbuh. All right reserved</p>
</footer>

</html>
<!--========== SCROLL REVEAL ==========-->
<script src="https://unpkg.com/scrollreveal"></script>

<!--========== MAIN JS ==========-->
<script src="assets/js/main.js"></script>


<script>
    const signUpButton = document.getElementById('signUp');
    const signInButton = document.getElementById('signIn');
    const container = document.getElementById('container');

    signUpButton.addEventListener('click', () => {
        container.classList.add("right-panel-active");
    });

    signInButton.addEventListener('click', () => {
        container.classList.remove("right-panel-active");
    });
</script>