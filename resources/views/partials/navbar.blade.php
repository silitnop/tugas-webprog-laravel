<nav class="navbar navbar-expand navbar-dark bg-dark mb-4">
    <div class="container">
        <div class="navbar-nav">
            <a class="nav-link {{ request()->routeIs('one') ? 'active fw-bold' : '' }}" href="{{ route('one') }}">One to One</a>
            <a class="nav-link {{ request()->routeIs('many') ? 'active fw-bold' : '' }}" href="{{ route('many') }}">One to Many</a>
            <a class="nav-link {{ request()->routeIs('mm') ? 'active fw-bold' : '' }}" href="{{ route('mm') }}">Many to Many</a>
            <a class="nav-link {{ request()->routeIs('artikel') ? 'active fw-bold' : '' }}" href="{{ route('artikel') }}">Artikel</a>
        </div>
    </div>
</nav>