<ul class="nav">
    
    
    <!-- Authentication Links -->
    @guest
        <li class="nav-item {{ Request::is('login') ? 'active' : ''}}">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
        @if (Route::has('register'))
            <li class="nav-item {{ Request::is('register') ? 'active' : ''}}">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
        @endif
    @else
        <li class="nav-item {{ Request::is('home') ? 'active' : ''}}  ">
        <a class="nav-link" href="#0">
            <i class="material-icons">dashboard</i>
            <p>Dashboard</p>
        </a>
        </li>
        <li class="nav-item ">
            <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>
    @endguest
    <!-- your sidebar here -->
</ul>
        