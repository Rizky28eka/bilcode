@extends('layouts/main')

@section('content')

    <!--==================== WORK PAGE ====================-->
    <section class="work__page section container" id="work__page">
        <h1 class="work__page-title">
            <div>This </div> <div>is </div> <div>our </div> <div>services. </div> <br>
            <div>Check </div> <div>out </div> <div>by </div> <div>filters.</div>
        </h1>

        {{-- <div #swiperRef="" class="swiper swiper_menu">
            <div class="swiper-wrapper">
                <div class="swiper-slide">Slide 1</div>
                <div class="swiper-slide">Slide 2</div>
                <div class="swiper-slide">Slide 3</div>
                <div class="swiper-slide">Slide 4</div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div> --}}

        <div class="work__page__container">
            <a href="#work_development" class="work__page__filters">Development</a>
            <a href="#work_branding" class="work__page__filters">Branding</a>
            <a href="#work_design" class="work__page__filters">Design</a>
        </div>

        <div class="work__page__body">
            <div class="work__page__list" id="work_development">
                <h1 class="work__page__body-title">Development</h1>
                <p class="work__page__body-desc">
                    Implementing your project with scalable architecture design, modern technology, and an excellent level of data security.
                </p>
                <div class="work__page__content grid">
                    <ul class="project__list">
                        <li>
                            <div class="project__container grid">
                                <div class="project__content">
                                    <div>
                                        <p class="project__title">Development</p>
                                        <h3 class="project__desc">Web Services</h3>
                                        <p class="project__category">We create web products designed specifically for your business goals, be it high-converting landing pages, complex web applications to automate your processes, or high-load platforms with sensitive data.</p>
                                        <a class="project__button" href="">View More</a>
                                    </div>
                                </div>

                                <div></div>

                                <div class="project__content-2">
                                    <img class="project__img" src="img/ui.jpg" alt="">
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="project__container grid">
                                <div class="project__content">
                                    <div>
                                        <p class="project__title">Development</p>
                                        <h3 class="project__desc">Mobile App</h3>
                                        <p class="project__category">We can create mobile applications for all platforms such as Android and iOS, with sophisticated architecture and modern design and guaranteed data security</p>
                                        <a class="project__button" href="">View More</a>
                                    </div>
                                </div>

                                <div></div>

                                <div class="project__content-2">
                                    <img class="project__img" src="img/Notes App.jpg" alt="">
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="work__page__list" id="work_branding">
                <h1 class="work__page__body-title">Branding</h1>
                <p class="work__page__body-desc">
                    Establishing the right visual connection with your customers and users by creating eye-catching and memorable designs as well as meaningful user experience.
                </p>
                <div class="work__page__content grid">
                    <ul class="project__list">
                        <li>
                            <div class="project__container grid">
                                <div class="project__content">
                                    <div>
                                        <p class="project__title">Branding</p>
                                        <h3 class="project__desc">Company Logo.</h3>
                                        <p class="project__category">We can make a company logo that is unique and easy to remember, as well as the right color palette</p>
                                        <a class="project__button" href="">View More</a>
                                    </div>
                                </div>

                                <div></div>

                                <div class="project__content-2">
                                    <img class="project__img" src="img/Logo.jpg" alt="">
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="project__container grid">
                                <div class="project__content">
                                    <div>
                                        <p class="project__title">Branding</p>
                                        <h3 class="project__desc">Brand Management.</h3>
                                        <p class="project__category">We can manage the branding of a product in a structured manner and create interesting content for an audience that fits the market for the product</p>
                                        <a class="project__button" href="">View More</a>
                                    </div>
                                </div>

                                <div></div>

                                <div class="project__content-2">
                                    <img class="project__img" src="img/Bilcode Academy.png" alt="">
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="work__page__list" id="work_design">
                <h1 class="work__page__body-title">Design</h1>
                <p class="work__page__body-desc">
                    Implementing an attractive design that can catch your eye is an important thing in building a design, so we help you to get the idea with our professional team.
                </p>
                <div class="work__page__content grid">
                    <ul class="project__list">
                        <li>
                            <div class="project__container grid">
                                <div class="project__content">
                                    <div>
                                        <p class="project__title">Design</p>
                                        <h3 class="project__desc">UI & UX Design</h3>
                                        <p class="project__category">We can make application designs that are interactive, elegant, and easily understood by users. covers all aspects of technology such as mobile and websites, as well as creating animations that match the theme of the designs we make</p>
                                        <a class="project__button" href="">View More</a>
                                    </div>
                                </div>

                                <div></div>

                                <div class="project__content-2">
                                    <img class="project__img" src="img/Dribble Shots - Billcode.jpg" alt="">
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

@endsection
