@extends('dashboard/layouts/main')

@section('content')

    <main>
        <div class="top">
            @auth
                <div class="message">
                    <h2><strong>Hi!</strong> You have 3 requests <a href="#">Check</a></h2>
                </div>

                <div class="title">
                    <h1>Data user page</h1>
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
                    <h2>User Table</h2>
                    <div class="option">
                        <a href="/development/blog/create" class="btn-post"><i class='bx bx-plus'></i>Post</a>
                    </div>
                </div>
                <div class="card__body">
                    <table>
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Profile Picture</th>
                            <th>Role</th>
                            <th>Username</th>
                            <th>Name</th>
                            <th>No. Telpon</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td><img src="{{ asset('storage/' . $user->image) }}" alt="{{ $user->name }}"></td>
                                    <td>{{ $user->role }}</td>
                                    <td class="table__title">{{ $user->username }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->phone }}</td>
                                    <td class="table__action">
                                        <a href="/development/blog/{{ $user->username }}" class="table__preview"><i class='bx bx-ghost'></i>Preview</a>
                                        <a href="/development/blog/{{ $user->username }}/edit" class="table__edit"><i class='bx bx-edit-alt'></i>Edit</a>
                                        <form action="/development/blog/{{ $user->username }}" method="POST">
                                            @method('delete')
                                            @csrf
                                            <button class="table__delete" onclick="return confirm('Are you sure?')"><i class='bx bx-trash-alt'></i>Delete</button>
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
