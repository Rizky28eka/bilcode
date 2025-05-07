@extends('layouts/main')

@section('content')

    <!--==================== WORK PAGE ====================-->
    <section class="work__page section container" id="work__page">
        <h1 class="work__page-title">
            <div>This </div> <div>is </div> <div>our </div> <div>work. </div> <br>
            <div>Check </div> <div>out </div> <div>by </div> <div>filters.</div>
        </h1>

        <div class="work__page__container">
            <a href="#work_digital-strategy" class="work__page__filters">All Projects</a>
            <a href="#work_branding" class="work__page__filters">Website</a>
            <a href="#work_user-experience" class="work__page__filters">Mobile App</a>
            <a href="#work_user-experience" class="work__page__filters">Dashboard</a>
        </div>

        <div class="work__page__body">
            @foreach ($works as $work)
                <div class="work__page__list sr-1500">
                    <h1 class="work__page__list-title">{{ $work->title }}</h1>
                    <img class="work__page__list-img" src="{{ asset('storage/' . $work->image) }}" alt="">
                    <div class="work__page__list-desc ">
                        <div>
                            <p>Services</p>
                            <h5>{{ $work->category->name }} <br>
                            </h5>
                        </div>
                        <div>
                            {{-- {!! $work->body !!} --}}
                        </div>
                        <div class="work__page__list-link">
                            <a href="/working-together/{{ $work->slug }}">View Case Study</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

@endsection
