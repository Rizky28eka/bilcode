<aside>
    <div class="top">
        <div class="logo">
            <img src="/img/Logo.png" alt="">
            <h2>Bilcode</h2>
        </div>
        <div class="close" id="close-btn">
            <i class='bx bx-x'></i>
        </div>
    </div>

    <div class="profile">
        @auth
            <div class="icon">
                <img src="{{  asset('storage/' . auth()->user()->image)  }}" alt="{{ auth()->user()->name }}">
            </div>
            <div class="right">
                <h3>{{ auth()->user()->name }}</h3>
                <p>{{ auth()->user()->role->name }}</p>
            </div>
        @endauth
    </div>

    <div class="sidebar">

        <a href="/development" class="{{ Request::is('development') ? 'active' : '' }}">
            <i class='bx bx-home-alt'></i>
            <h3>Dashboard</h3>
        </a>
        <a href="/development/work" class="{{ Request::is('development/work*') ? 'active' : '' }}">
            <i class='bx bx-collection'></i>
            <h3>Work</h3>
        </a>
        {{-- <a href="/development/blog" class="{{ Request::is('development/blog*') ? 'active' : '' }}">
            <i class='bx bx-receipt'></i>
            <h3>Blog</h3>
        </a> --}}
        <a href="/development/profile" class="{{ Request::is('development/profile*') ? 'active' : '' }}">
            <i class='bx bx-user-circle'></i>
            <h3>My profile</h3>
        </a>
        {{-- <a href="/development/data-user" class="{{ Request::is('development/data-user*') ? 'active' : '' }}">
            <i class='bx bxs-user-detail'></i>
            <h3>Data User</h3>
        </a> --}}
        <form action="/logout" method="post">
            @csrf
            <button type="submit"><i class='bx bx-log-out'></i><h3>Logout</h3></button>
        </form>
    </div>
</aside>
