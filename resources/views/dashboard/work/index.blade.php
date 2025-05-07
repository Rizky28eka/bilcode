@extends('dashboard/layouts/main')

@section('content')
    <main>
        <div class="top">
            @auth
                <div class="message">
                    <h2><strong>Hi!</strong> You have 3 requests <a href="#">Check</a></h2>
                </div>

                <div class="title">
                    <h1>Work page</h1>
                </div>

                @if (session()->has('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
            @endauth
        </div>

        <div class="bottom">
            <div class="card">
                <div class="card__title">
                    <h2>Work Table</h2>
                    <div class="option">
                        <a href="/development/work/create" class="btn-post"><i class='bx bx-plus'></i>Post</a>
                    </div>
                </div>
                <div class="card__body">
                    <table>
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Time</th>
                                <th>Author</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($works as $work)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <img src="{{ asset('storage/' . $work->image) }}" class="table__img" alt="">
                                    </td>
                                    <td class="table__title">{{ $work->title }}</td>
                                    <td>{{ $work->category->name }}</td>
                                    <td>
                                        <p>{{ $work->published_at }}</p>
                                    </td>
                                    <td class="table__author">
                                        @foreach ($work->contributors as $contributor)
                                            {{ $contributor->user->name }}
                                            <br>
                                        @endforeach
                                    </td>
                                    <td class="table__action">
                                        {{-- <a href="/development/work/{{ $work->slug }}" class="table__preview"><i class='bx bx-ghost'></i>Preview</a> --}}
                                        <a href="/development/work/{{ $work->slug }}/edit" class="table__edit"><i class='bx bx-edit-alt'></i>Edit</a>
                                        <form action="/development/work/{{ $work->slug }}" method="post">
                                            @method('delete')
                                            @csrf
                                            <button class="table__delete" onclick="return confirm('Are you sure?')"><i
                                                    class='bx bx-trash-alt'></i>Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </main>
@endsection
