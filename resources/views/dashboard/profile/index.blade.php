@extends('dashboard/layouts/main')

@section('content')
    <main>
        <div class="top">
            @auth
                <div class="message">
                    <h2><strong>Hi!</strong> You have 3 requests <a href="#">Check</a></h2>
                </div>

                <div class="title">
                    <h1>Account settings</h1>
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
                    <h2>Profile</h2>
                    <div class="option">
                        <a href="/development/work/create" class="table__preview"><i class='bx bx-save'></i>Save</a>
                    </div>
                </div>
                <div class="card__body">
                    <div class="flex">
                        <p>Username</p>
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection
