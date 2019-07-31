<header>
    <nav class="navbar navbar-expand-md navbar-dark">
        <a href="{{ url('/') }}" class="navbar-brand">Geckos</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"></button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
            <ul class="navbar-nav">
                <li class="nav-item mr-3">
                    <a class="nav-link myWhite" style="color: white;" href="#">About Us</a>
                </li>
                <li class="nav-item mr-3">
                    <a class="nav-link myWhite" style="color: white;" href="#">Pricing</a>
                </li>
                <li class="nav-item mr-3">
                    <a class="nav-link myWhite" style="color: white;" href="#">Support</a>
                </li>
                @guest
                    <li>
                        <a class="nav-link myWhite" style="color: white;" href="{{ route('login') }}">Login</a>
                    </li>
                    @if (Route::has('register'))
                        <a class="nav-link myWhite" style="color: white;" href="{{ route('register') }}">Sign Up</a>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </nav>
</header>