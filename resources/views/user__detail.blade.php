@extends('layouts/main')

@section('content')

    <!--==================== WORK DETAIL ====================-->
    <section class="work__detail section container" id="work__detail">
        <h1 class="work__detail-title">
            {{ $work->title }} {{-- Name User --}}
        </h1>

        <a class="work__detail-category" href="#">
            {{ $work->category->name }} {{-- Role User --}}
        </a>

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
                            {!! $work->summary !!}
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
