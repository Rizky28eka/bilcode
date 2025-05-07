@extends('layouts/main')

@section('content')

    <!--==================== BLOG PAGE ====================-->
    <section class="blog__page section container" id="blog__page">
        <h1 class="blog__page-title">
            {{-- Blog --}}
        </h1>

        <div class="blog__page__container">
            <a href="#blog_branding" class="blog__page__filters">All</a>
            <a href="#blog_user-experience" class="blog__page__filters">Awards</a>
            <a href="#blog_development" class="blog__page__filters">How to</a>
            <a href="#blog_web-design" class="blog__page__filters">Tech</a>
            <a href="#blog_enterprise-ux" class="blog__page__filters">Jobs</a>
            <a href="#blog_enterprise-ux" class="blog__page__filters">Hots</a>
        </div>

        <div class="blog__page__body">
            @foreach ($blogs as $blog)
            <a href="" class="image">
                <img class="image__img" src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}">
                <div class="image__overlay">
                    <p class="image__category">{{ $blog->category->name }}</p>
                    <h2 class="image__title">
                        {{ $blog->title }}
                    </h2>
                </div>
            </a>
            @endforeach
        </div>

    </section>


@endsection
