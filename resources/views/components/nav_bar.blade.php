
<nav class="navbar navbar-expand-md navbar-light bg-white m-0 p-0">
    <div class="container-fluid p-0 m-0">

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto col-8 bg-white d-flex justify-content-around text-center">
                    <x-link link="/" >HOME</x-link>
                    <x-link link="/categories" >SHOP</x-link>
                    <x-link link="/haha" >PLOG</x-link>
                    <x-link>PAGES</x-link>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto col-4 d-flex justify-content-around text-center bgskincolor">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item my-3 fs-5 fw-bolder ">
                                <a class="nav-link  text-white " href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item my-3 fs-5 fw-bolder ">
                                <a class="nav-link  text-white " href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item my-3 fs-5 fw-bolder  dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->fname }} {{ Auth::user()->lname }}
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

