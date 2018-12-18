<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{route('blog.index')}}">Laravel Guilde</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a class="nav-link" href="{{route('blog.index')}}">Blog</a></li>
            <li><a class="nav-link" href="{{route('other.about')}}">About</a></li>
            <li><a class="nav-link" href="{{route('admin.index')}}">Admin</a></li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
            <li>
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        </ul>


    </div>
</nav>
