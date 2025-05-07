@extends('layouts/main')

@section('content')
    <!--==================== WORK DETAIL ====================-->
    <section class="work__detail section container" id="work__detail">
        <p class="blog__detail-time">
            {{ $work->published_at }}
        </p>
        <h1 class="blog__detail-title">
            {{ $work->title }}
        </h1>

        <a class="work__detail-category" href="#">
            {{ $work->category->name }}
        </a>

        <div class="developer">
            @foreach ($work->contributors as $contributor)
                <div class="developer__profile">
                    <img class="developer__profile-img" src="{{ asset('storage/' . $contributor->user->image) }}" alt="{{ $contributor->user->name }}">

                    <div>
                        <a class="developer__profile-name" href="#">{{ $contributor->user->name }}</a>
                        <p class="developer__profile-role">{{ $contributor->user->role->name }}</p>
                    </div>
                </div>
            @endforeach
        </div>


        <img class="work__detail-img" src="{{ asset('storage/' . $work->image) }}" alt="{{ $work->name }}">


        <div class="work__detail-body">
            {!! $work->body !!}
        </div>

    </section>
@endsection
