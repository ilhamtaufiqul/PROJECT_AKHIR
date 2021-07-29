<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">

        {{-- Pokok Gass Icon --}}
        <a class="navbar-brand mr-auto" href="/">Pokok Gass</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav mx-auto">

                <a class="nav-item nav-link" href="/">Home</a>
                <a class="nav-item nav-link" href="about">About</a>
                <a class="nav-item nav-link" href="contact">Contact</a>
                <a class="nav-item nav-link" href="opentrips">Open Trip</a>
                <a class="nav-item nav-link" href="mountains">Guide</a>
                <a class="nav-item nav-link" href="mountain">Admin</a>
            </div>


            {{-- @if (Auth::check()) --}}
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown mr-3">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-user"></i> Hi,
                        @if (Auth::check())
                        {{ Auth::user()->name  }}
                        @endif
                    </a>
                    <div class="dropdown-menu">
                        <a href="login" class="dropdown-item">
                            {{ __('Login') }}
                        </a>
                        <form href="login" id="login-form">
                            @csrf
                        </form>
                        @if (Auth::check())
                        <a href="login" class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form action="{{ route('logout') }}" id="logout-form" method="POST" style="display: none;">
                            @csrf
                        </form>
                        @endif
                    </div>
                </li>
            </ul>
            {{-- @endif --}}

        </div>
    </div>
</nav>