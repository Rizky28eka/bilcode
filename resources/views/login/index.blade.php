<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Billcode @yield('title')</title>

    <!--========== FAVICON ==========-->
    <link rel="shortcut icon" href="/img/logo3.jpg" type="image/x-icon">

    <!--========== BOXICONS ==========-->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <!--========== CSS ==========-->
    <link rel="stylesheet" href="/css/main.css">

</head>
<body>

    <header class="header" id="header">
        <nav class="nav container">
            <a href="/" class="nav__logo">
                {{-- <img src="assets/img/logo.png" alt="" class="nav__logo-img"> --}}
                Billcode.
            </a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="/a-startup-technology" class="nav__link">About</a>
                    </li>
                    <li class="nav__item">
                        <a href="/what-we-do" class="nav__link active-link">Services</a>
                    </li>
                    <li class="nav__item">
                        <a href="/working-together" class="nav__link active-link">Work</a>
                    </li>
                    <li class="nav__item">
                        <a href="/writing-about" class="nav__link">Blog</a>
                    </li>
                </ul>

                {{-- <div class="nav__close" id="nav-close">
                    <i class="bx bx-x"></i>
                </div> --}}

                <img src="assets/img/nav-light.png" alt="" class="nav__img">
            </div>

            <div class="nav__btns">
                <!-- Theme change button -->
                <i class="bx bx-moon change-theme" id="theme-button"></i>

                <a href="#contact" class="nav__contact">Contact Us</a>
            </div>

            <!--==================== OVERLAY ====================-->
            <div class="nav__btns">
                <!-- Toggle button -->
                {{-- <div class="nav__toggle" id="nav-toggle">
                    <i class="bx bx-grid-alt"></i>
                </div> --}}

                <a href="javascript:;" title="" class="btn__toggle">
                    <span></span>
                    <span></span>
                </a>

                <div class="menu__toggle">
                    <div class="menu__toggle__container container">
                        <div class="menu__toggle__content"></div>
                        <div class="menu__toggle__content">
                            <p class="menu__toggle-title">Menu</p>
                            <ul class="menu__toggle__list">
                                <li class="menu__toggle__item">
                                    <a href="/" class="menu__toggle__link">Home</a>
                                </li>
                                <li class="menu__toggle__item">
                                    <a href="/a-startup-technology" class="menu__toggle__link">About</a>
                                </li>
                                <li class="menu__toggle__item">
                                    <a href="/what-we-do" class="menu__toggle__link">Services</a>
                                </li>
                                <li class="menu__toggle__item">
                                    <a href="/working-together" class="menu__toggle__link">Work</a>
                                </li>
                                <li class="menu__toggle__item">
                                    <a href="/writing-about" class="menu__toggle__link">Blog</a>
                                </li>
                                <li class="menu__toggle__item">
                                    <a href="/all-ears" class="menu__toggle__link">Contacts</a>
                                </li>
                            </ul>
                        </div>
                        <div class="menu__toggle__content">
                            <div class="work__footer">
                                <p class="menu__toggle-title">Work with us</p>
                                <a href="#">
                                    billcode@gmail.com
                                </a>
                            </div>
                            {{-- <div class="ui__theme">
                                <input type="checkbox" id="switch">

                                <div class="app">
                                    <div class="phone_body">
                                        <div class="phone">
                                            <div class="content">
                                                <div class="circle">
                                                    <div class="cut_circle"></div>
                                                </div>

                                                <label for="switch" id="ui__switch">
                                                    <div class="toggle"></div>
                                                    <div class="names">
                                                        <p class="light">Light</p>
                                                        <p class="dark">Dark</p>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                        <div class="menu__toggle__content">
                            <div class="dd">
                                <div class="drop">
                                    <h1>B_</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </nav>
    </header>


    <section id="login" class="section">

        @if (session()->has('success'))
            <div class="alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if (session()->has('loginError'))
            <div class="alert-failed">
                {{ session('loginError') }}
            </div>
        @endif

        <h1 class="login__title">
            Login to Your Account
        </h1>
        <p class="login__desc">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iure, accusamus?
        </p>

        <div class="login__form">
            <form action="/login" method="post">
                @csrf
                <div class="login__form-field">
                  <input type="text" class="" id="username" name="username" placeholder="Username" autofocus required value="{{ old('username') }}">
                </div>
                <div class="login__form-field">
                  <input type="password" class="" id="password" name="password" placeholder="Password" required>
                </div>

                <button class="login__form-btn" type="submit">Login to Your Account <i class='bx bx-chevron-right'></i></button>
              </form>
        </div>

        <a href="#" class="forgot__password">Forgot Password?</a>
    </section>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!--========== MAIN JS ==========-->
    <script src="/js/main.js"></script>

    <!--========== HOME JS ==========-->
    <script src="/js/home.js"></script>

</body>
</html>
