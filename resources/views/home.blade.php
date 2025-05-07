@extends('layouts/main')

@section('content')
    <!--==================== HOME ====================-->
    <section class="home" id="home">
        <div class="video__wrapper">
            <div class="video__placeholder">
                <video src="videos/apps.mp4" preload="auto" autoplay muted loop id="websites"></video>
            </div>
        </div>
        <div class="home__container container">
            <a class="home__link" data-src="videos/apps.mp4" href="#">
                <div class="home__link-dev">Development.</div>
            </a>
            <a class="home__link" data-src="videos/branding.mp4" href="#">
                <div class="home__link-bran">Branding.</div>
            </a>
            <a class="home__link" data-src="videos/websites.mp4" href="#">
                <div class="home__link-des">Design.</div>
            </a>
        </div>

        <div class="scroll">
            <div class="mouse-scroll">
            </div>

    </section>

    <!--==================== WORK ====================-->
    <section class="work section container" id="work">
        <div class="work__container">
            <div class="work__content">
                <h2 class="work__title">You may need our services if you want to:</h2>
            </div>

            <div class="work__content">
                <ul class="work__list">
                    <li>
                        <a href="" class="work__item">Development App</a>
                    </li>
                    <li>
                        <a href="" class="work__item">Branding</a>
                    </li>
                    <li>
                        <a href="" class="work__item">UI & UX Design</a>
                    </li>
                    <li>
                        <a href="" class="work__item">Digital Strategy</a>
                    </li>
                    <li>
                        <a href="" class="work__item">Political IT Support</a>
                    </li>
                    {{-- <li>
                        <a href="" class="work__item">MICE</a>
                    </li> --}}
                </ul>
            </div>
        </div>
    </section>

    <!--==================== QUOTES ====================-->
    <section class="quotes section container" id="quotes">
        <p class="quotes-title">Would you like to see some projects that we already implemented? As an <span>IT service
                company</span>, we want not only to release successful projects but also to share our <span>experience
                with</span> others!</p>
    </section>

    <!--==================== PROJECT ====================-->
    <section class="project section container" id="project">
        <ul class="project__list">
            @foreach ($works as $work)
                <li>
                    <div class="project__container">
                        <div class="project__content">
                            <div>
                                {{-- <p class="project__title">{{ $work->category->name }}</p> --}}
                                <h3 class="project__desc">{{ $work->title }}</h3>
                                <p class="project__category">{{ $work->category->name }}</p>
                                <a class="project__button" href="/working-together/{{ $work->slug }}">View More</a>
                            </div>
                        </div>

                        <div></div>

                        <div class="project__content-2">
                            {{-- <img class="project__img" src="{{ asset('storage/' . $work->image) }}" alt=""> --}}
                            <img class="project__img" src="{{ asset('storage/' . $work->image) }}"
                                alt="{{ $work->title }}">
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </section>
@endsection
