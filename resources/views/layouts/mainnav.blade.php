<div>
    <ul id="navbar">
        <li><a href="/">Home</a></li>
        <li><a class="active" href="/shop">Shop</a></li>
        <li><a href="/contact">Contact</a></li>
        @if (Route::has('login'))
            {{-- <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block"> --}}
                @auth
                <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                {{-- <li>
                    <form action="POST" action="{{ route('logout') }}" x-data>
                        @csrf
                        <a href="{{ route('logout') }}">LOGOUT</a>
                    </form>
                </li> --}}
                @else
                <li><a href="{{ route('login') }}">Log in</a></li>

                @if (Route::has('register'))
                    <li><a href="{{ route('register') }}">Register</a></li>
                @endif
                @endauth
            {{-- </div> --}}
        @endif
        <li>
            <a href="/cart"><i class="fa-solid fa-cart-shopping"></i></a>
        </li>
    </ul>
</div>