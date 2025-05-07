@extends('layouts/main')

@section('content')

    <!--==================== ABOUT PAGE ====================-->
    <section class="work__page section container" id="about__page">
        <h1 class="work__page-title">
           {{-- <div>We're </div> <div>nurun. </div> <div>Human </div> <div>by </div> <div>design. </div> <div>I'ts </div> <div>our </div> <div>motto.</div> --}}
           <div>Everyone</div> <div>has</div> <div>a</div> <div>dream</div> <div>to</div> <div>achieve</div>
        </h1>

    </section>

    <img class="sr-1800" style="margin-bottom: 5rem; margin-top: 5rem;" src="img/office.jpg" alt="">

    <!--==================== GOAL ====================-->
    <section class="goal section container" id="goal">
        <p class="goal__title">Our Goal</p>
        <h3 class="goal__desc">
            We like to see our clients as partners and we do our best to deliver the product they and their users are 100% satisfied with. Agile principles, ongoing communication, transparency are the cornerstones of each of our projects.
        </h3>

        <div class="goal__container">
            <div class="goal__content">
                <h1 class="goal__content__title">
                    Strong <br>
                    value we <br>
                    standby
                </h1>
            </div>

            <div class="goal__content">
                <ul class="goal__list">
                    <li>
                        <h3 class="goal__list__title">Honest</h3>
                        <p class="goal__list__desc">
                            Our number one priority is honesty and being true to our beliefs and years of collective experience.
                        </p>
                    </li>
                    <li>
                        <h3 class="goal__list__title">Forward-thinking</h3>
                        <p class="goal__list__desc">
                            Our ever-increasing thirst for innovation enables us to offer our clients ultimate solutions.
                        </p>
                    </li>
                    <li>
                        <h3 class="goal__list__title">Client-centric</h3>
                        <p class="goal__list__desc">
                            Our clients always have been and always will be, our number one priority. We go above and beyond every time; evident in our level of referral work.
                        </p>
                    </li>
                    <li>
                        <h3 class="goal__list__title">Passionate</h3>
                        <p class="goal__list__desc">
                            We immerse ourselves in every project. Our passion for what we do is boundless.
                        </p>
                    </li>
                    <li>
                        <h3 class="goal__list__title">Dedicated</h3>
                        <p class="goal__list__desc">
                            We go above and beyond to ensure our projects are effective and maximise results for our clients.
                        </p>
                    </li>
                    <li>
                        <h3 class="goal__list__title">Authentic</h3>
                        <p class="goal__list__desc">
                            We are a down-to-earth team, always true to our word.
                        </p>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!--==================== BOSS ====================-->
    <section class="boss section container" id="boss">
        <h1 class="boss__title">
            Like a boss.
        </h1>

        <div class="boss__container">
            <ul class="boss__list">
                {{-- <a href="">
                    <li class="boss__content">
                        <div class="">
                            <h3 class="boss__list__title">Oyon M Hendradinata</h3>
                            <p class="boss__list__desc">
                                Founder & CEO.
                            </p>
                        </div>
                    </li>
                </a> --}}
                <a href="" class="sr-300">
                    <li class="boss__content">
                        <div class="grid">
                            <h3 class="boss__list__title">Muhammad Abdurahman Salsabil</h3>
                            <p class="boss__list__desc">
                                Back-end Developer.
                            </p>
                        </div>
                    </li>
                </a>
                <a href="" class="sr-600">
                    <li class="boss__content">
                        <div class="grid">
                            <h3 class="boss__list__title">Dzakky Fawwaz</h3>
                            <p class="boss__list__desc">
                                Front-end Developer.
                            </p>
                        </div>
                    </li>
                </a>
                <a href="" class="sr-900">
                    <li class="boss__content">
                        <div class="grid">
                            <h3 class="boss__list__title">Dzikra Fisichella</h3>
                            <p class="boss__list__desc">
                                UI UX Designer.
                            </p>
                        </div>
                    </li>
                </a>
                <a href="" class="sr-1200">
                    <li class="boss__content">
                        <div class="grid">
                            <h3 class="boss__list__title">Mochammad Ahya Satari</h3>
                            <p class="boss__list__desc">
                                IOS & Android Developer.
                            </p>
                        </div>
                    </li>
                </a>
            </ul>
        </div>
    </section>


@endsection
