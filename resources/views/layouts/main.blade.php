<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>E-Bako | Beli Sembako Online</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/shop.css" />
</head>

<body>
    <section id="header">
        <a href="/"><img src="img/ebakologo.png" class="logo" alt="" /></a>

        <div>
            <ul id="navbar">
                <li><a href="/">Home</a></li>
                <li><a class="active" href="/shop">Shop</a></li>
                <li><a href="/contact">Contact</a></li>
                @if (Route::has('login'))
                    {{-- <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block"> --}}
                        @auth
                        <li><a href="{{ url('/redirect') }}">Dashboard</a></li>
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
    </section>
    
    <section id="page-header">
        <h2>#Stay At Home</h2>
        <p>Belanja sembako dari rumah</p>
    </section>

    <section id="product1" class="section-p1">
        <div class="pro-container">
            @yield('container')
        </div>
    </section>

    <section id="pagination" class="section-p1">
        <a href="#">1</a>
        <a href="#">2</a>
        <a href="#"><i class="fa-solid fa-arrow-right"></i></a>
    </section>

    <script src="script.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"></script>
</body>
</html>