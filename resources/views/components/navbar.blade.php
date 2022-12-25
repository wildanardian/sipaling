<nav class="navbar navbar-expand-md">
    <div class="container mt-4">
        <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
            <ul class="navbar-nav mr-auto">
                <a class="navbar-brand" href="{{ route('landingpage') }}">Si Paling</a>
            </ul>
        </div>
        <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Course</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Rank</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                </li>

                @guest
                    <li class="nav-item">
                        <a class="btn" id="buttonlogin" href="{{ route('login') }}">Login</a>
                    </li>

                    @else
                    <li class="nav-item">
                        <a class="btn" id="buttonlogin" href="{{ route('logout' ) }}">Logout</a>
                    </li>

                @endguest


            </ul>
        </div>
    </div>
</nav>
