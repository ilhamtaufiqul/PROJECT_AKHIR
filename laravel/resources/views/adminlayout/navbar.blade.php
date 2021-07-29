<nav class="navbar navbar-expand-lg navbar-dark bg-danger fixed-top">
    <div class="container">
        <a href="/" class="navbar-brand">Pokok Gass</a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav">

                @if (Auth::check())
                <li class="nav-item px-2">
                    <a href="mountain" class="nav-link active">Mountain</a>
                </li>
                @endif

                @if (Auth::check())
                <li class="nav-item px-2">
                    <a href="opentrip" class="nav-link active">Open Trip</a>
                </li>
                @endif

                @if (Auth::check())
                <li class="nav-item px-2">
                    <a href="guide" class="nav-link active">Guide</a>
                </li>
                @endif

                @if (Auth::check() && Auth::user()->level == 'operator')
                <li class="nav-item px-2">
                    <a href="user" class="nav-link active">User</a>
                </li>
                @endif

            </ul>

            @if (Auth::check())
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown mr-3">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-user"></i> Hi, {{ Auth::user()->name  }}
                    </a>
                    <div class="dropdown-menu">
                        <a href="login" class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form action="{{ route('logout') }}" id="logout-form" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
            @endif
        </div>
    </div>
</nav>
<br>