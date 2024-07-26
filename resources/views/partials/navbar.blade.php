{{-- <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="/">Blog Blog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'home' ? 'active' : '' }}" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'about' ? 'active' : '' }}" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'posts' ? 'active' : '' }}" href="/posts">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'categories' ? 'active' : '' }}" href="/categories">Categories</a>
                </li>
            </ul>
            {{-- <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form> --}}
{{-- <ul class="navbar-nav ms-auto">
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Welcome back, {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/dashboard">My Dashboard <i
                                        class="bi bi-layout-text-window-reverse"></i></a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <form action="/logout" method="post">
                                @csrf
                                <button type="submit" class="dropdown-item">Logout <i
                                        class="bi bi-box-arrow-right"></i></button>
                            </form>
                        </ul>
                    </li>
                @else
                    <li class="nav-item">
                        <a href="/login" class="nav-link{{ $active === 'login' ? 'active' : '' }}">Login <span><i
                                    class="bi bi-box-arrow-in-right"></i></span></a>
                    </li>
                @endauth
            </ul>

        </div>
    </div>
</nav> --}}

<div id="preloader">
    <div id="ctn-preloader" class="ctn-preloader">
        <div class="icon"><img src="/img/user/logo/loader.png" alt="" class="m-auto d-block" width="60">
        </div>
        <div class="txt-loading">
            <span data-text-preloader="Bl" class="letters-loading">
                Bl
            </span>
            <span data-text-preloader="og" class="letters-loading">
                og
            </span>
            <span data-text-preloader="ge" class="letters-loading">
                ge
            </span>
            <span data-text-preloader="r" class="letters-loading">
                r
            </span>
            <span data-text-preloader="i" class="letters-loading">
                i
            </span>
            <span data-text-preloader="n" class="letters-loading">
                n
            </span>
        </div>
    </div>
</div>
<!-- preloader end -->


<!-- header start -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="/img/user/logo/logo.svg" alt="logo" style="height: 40px;">
            <h5 class="d-inline">Bloggerin</h5>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'home' ? 'active' : '' }}" href="/">
                        Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'about' ? 'active' : '' }}" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'posts' ? 'active' : '' }}" href="/posts">Blogs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'categories' ? 'active' : '' }}" href="/categories">Categories</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle {{ $active === 'auth' ? 'active' : '' }}" href="#"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Welcome back, {{ auth()->user()->name }}
                            <img src="{{ asset('storage/' . auth()->user()->image) }}" alt="icon" class="p-2 rounded-circle" style="width: 40px; height: 40px;">
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/profile/{{ auth()->user()->username }}/edit">My Profile <i
                                        class="bi bi-person-square float-end"></i></a>
                            </li>
                            <li>
                            <li><a class="dropdown-item" href="/dashboard">My Dashboard <i
                                        class="bi bi-layout-text-window-reverse align-items-end float-end"></i></a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <form action="/logout" method="post">
                                @csrf
                                <button type="submit" class="dropdown-item">Logout <i
                                        class="bi bi-box-arrow-right float-end"></i></button>
                            </form>
                        </ul>
                    </li>
                @else
                    <li class="nav-item">
                        <a href="/login" class="nav-link {{ $active === 'login' ? 'active' : '' }}">Login <span><i
                                    class="bi bi-box-arrow-in-right"></i></span></a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
