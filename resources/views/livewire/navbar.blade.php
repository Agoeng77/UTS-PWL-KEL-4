<div>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <strong>GoodGamingShopp</strong>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                <a class="nav-link" href="{{ route('home') }}">Home</a>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Catalog
                    </a>
                <ul class="dropdown-menu">
                    @foreach ($categories as $category)
                    <a class="dropdown-item" href="{{ route('products.catalog', $category->id) }}">{{ $category->nama }}</a>
                    @endforeach
                    {{-- <li><a class="dropdown-item" href="#"><i class="fa-solid fa-headset fa-fw fa-fade" style="--fa-animation-duration: 2s"></i> Headset</a></li>
                    <li><a class="dropdown-item" href="#"><i class="fa-solid fa-computer-mouse fa-fw fa-fade" style="--fa-animation-duration: 2s"></i> Mouse</a></li>
                    <li><a class="dropdown-item" href="#"><i class="fa-solid fa-keyboard fa-fw fa-fade" style="--fa-animation-duration: 2s"></i> Keyboard</a></li> --}}
                    <li><a class="dropdown-item" href="{{ route('products')}}"><i class="fa-solid fa-list fa-fw fa-fade" style="--fa-animation-duration: 2s"></i> All Categories</a></li>
                </ul>
            </li>    
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Others
                </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Shopping Cart</a></li>
                <li><a class="dropdown-item" href="#">Transaction History</a></li>
            </ul>
        </li>    
    </div>
</div>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
</div>

