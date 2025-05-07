<!--==================== NAVBAR ====================-->
<header class="header" id="header">
    <nav class="nav container">
        <a href="/" class="nav__logo">
            <img src="/img/Bilcode.png" alt="" class="nav__logo-img">
            {{-- Bilcode. --}}
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
                    <a href="/working-together" class="nav__link active-link">Works</a>
                </li>
                {{-- <li class="nav__item">
                    <a href="/writing-about" class="nav__link">Blogs</a>
                </li> --}}
            @auth
                <li class="nav__item">
                    <a href="/development" class="nav__link">Dashboard</a>
                </li>
            @endauth
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
                                <a href="/working-together" class="menu__toggle__link">Works</a>
                            </li>
                            {{-- <li class="menu__toggle__item">
                                <a href="/writing-about" class="menu__toggle__link">Blogs</a>
                            </li> --}}
                            <li class="menu__toggle__item">
                                <a href="/all-ears" class="menu__toggle__link">Contacts</a>
                            </li>
                        @auth
                            {{-- <li class="menu__toggle__item">
                                <a href="/all-ears" class="menu__toggle__link">Contacts</a>
                            </li> --}}
                        @endauth
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

<!--==================== SIDEBAR ====================-->
<div class="sidebar container">
    <ul class="side__list">
        <li class="side__item">
            <a href="wa.me/085155426763" class="side__link"><i class='bx bxl-whatsapp' ></i></a>
        </li>
        {{-- <li class="side__item">
            <a href="" class="side__link"><i class='bx bxl-linkedin' ></i></a>
        </li> --}}
        <li class="side__item">
            <a href="https://www.instagram.com/bilcode.id/" class="side__link"><i class='bx bxl-instagram'></i></a>
        </li>
        {{-- <li class="side__item">
            <a href="" class="side__link"><i class='bx bxl-facebook'></i></a>
        </li> --}}
        <li class="side__item">
            <a href="https://dribbble.com/BILCODE" class="side__link"><i class='bx bxl-dribbble' ></i></a>
        </li>
    </ul>
</div>
