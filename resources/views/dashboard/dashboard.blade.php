@extends('dashboard/layouts/main')

@section('content')

    <main>
        <div class="top">
            @auth
                <div class="message">
                    <h2><strong>Hi!</strong> You have 3 requests <a href="#">Check</a></h2>
                </div>

                <div class="title">
                    <h1>Dashboard</h1>
                    {{-- <h3>ID : 0000000</h3> --}}
                </div>
            @endauth

            <div class="insights">

                <div class="item works">
                    <div class="icon">
                        <i class='bx bx-collection'></i>
                    </div>
                    <div class="right">
                        <small class="text-muted">Work Posts</small>
                        <h3>362</h3>
                    </div>
                </div>

                <div class="item blogs">
                    <div class="icon">
                        <i class='bx bx-receipt'></i>
                    </div>
                    <div class="right">
                        <small class="text-muted">Blog Posts</small>
                        <h3>362</h3>
                    </div>
                </div>

                <div class="item achivements">
                    <div class="icon">
                        <i class='bx bx-award'></i>
                    </div>
                    <div class="right">
                        <small class="text-muted">Acivemetns Posted</small>
                        <h3>362</h3>
                    </div>
                </div>

                <div class="item products">
                    <div class="icon">
                        <i class='bx bx-purchase-tag-alt'></i>
                    </div>
                    <div class="right">
                        <small class="text-muted">Products Posts</small>
                        <h3>362</h3>
                    </div>
                </div>

            </div>

        </div>

        <div class="bottom">
            <div class="card">
                <h2>Line Chart</h2>
            </div>
        </div>
    </main>

@endsection
