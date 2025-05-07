@extends('dashboard/layouts/main')

@section('content')

    <main>
        <div class="show">
            <div class="navbar">
                <a href="/dashboard/posts">
                    <i class='bx bx-left-arrow-alt'></i>
                </a>
            </div>
            <div class="body">
                <h3>{{ $post->created_at->format('d M Y - H:i:s') }}</h3>
                <h2>{{ $post->title }}
                </h2>
                <a class="h5" href="/writing-about?category={{ $post->category->slug }}">{{ $post->category->name }}
                </a>
                <div class="author">
                  <img src="image/profile.jpeg" alt="">
                  <div class="author-name my-auto">
                    <h3><a href="/writing-about?author={{ $post->author->username }}">{{ $post->author->name }}</a></h3>
                  </div>
                </div>
               {!! $post->body !!}
            </div>
        </div>
    </main>
@endsection