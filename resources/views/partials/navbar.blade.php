<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="container">
        <a class="navbar-brand" href="/">Alfa's Blog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            {{-- <li class="nav-item">
            <a class="nav-link {{ $title == 'home' ? 'active' : '' }}" href="/">Home</a>
            </li> --}}
            <li class="nav-item">
            <a class="nav-link {{ request()->is('about') ? 'active' : '' }}" href="{{ url('/about') }}">About</a>
            </li>
            <li class="nav-item">
            <a class="nav-link {{ request()->is('blog') ? 'active' : '' }}" href="{{ url('/blog') }}">Blog</a>
            </li>
            <li class="nav-item">
            <a class="nav-link {{ request()->is('categories') ? 'active' : '' }}" href="{{ url('/categories') }}">Categories</a>
            </li>
        </ul>

        <ul class="navbar-nav ms-auto">
            <!-- Example single danger button -->
            @auth
                <div class="btn-group">
                    <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Welcome, {{ auth()->user()->username }}</button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ url('dashboard') }}">Dashboard</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <form action="{{ url('logout') }}" method="POST">
                                @csrf 
                                <button class="dropdown-item" type="submit">Logout</button>
                            </form>
                        </li>
                    </ul>
                </div>
            @else
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('login') ? 'active' : '' }}" href="{{ url('/login') }}"><i class="bi bi-box-arrow-in-right mx-2"></i>Login</a>
                </li>
            @endauth
        </ul>
        </div>
    </div>
</nav>