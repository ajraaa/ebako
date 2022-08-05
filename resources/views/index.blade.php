<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>E-Bako | Beli Sembako Online</title>
    <link rel="stylesheet" href="css/styles.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,700;1,700&display=swap" rel="stylesheet" />
</head>

<body>
    <section class="header" style="background-image: linear-gradient(rgba(4, 9, 30, 0.7), rgba(4, 9, 30, 0.7)), url('{{ asset('img/jogja.jpg') }}');">
        <nav>
            <a href=""><img class="logo" src="img/logoebako.png" /></a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-window-close" onclick="hideMenu()"></i>
                <ul>
                    
                    <li><a href="/">HOME</a></li>
                    <li><a href="/shop">SHOP</a></li>
                    <li><a href="/contact">CONTACT</a></li>
                    @if (Route::has('login'))
                    {{-- <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block"> --}}
                        @auth
                        <li><a href="{{ url('dashboard') }}">DASHBOARD</a></li>
                        {{-- <li>
                            <form action="POST" action="{{ route('logout') }}" x-data>
                                @csrf
                                <a href="{{ route('logout') }}">LOGOUT</a>
                            </form>
                        </li> --}}
                        @else
                        <li><a href="{{ route('login') }}">LOGIN</a></li>

                        @if (Route::has('register'))
                            <li><a href="{{ route('register') }}">REGISTER</a></li>
                        @endif
                        @endauth
                    {{-- </div> --}}
                    @endif
                    
                    
                    {{-- <li><a href="/signup">LOGIN</a></li>
                    <li><a href="/admin">ADMIN</a></li> --}}
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
        <div class="text-box">
            <h1>E-BAKO</h1>
            <p>
                Tidak perlu ribet lagi keluar rumah untuk membeli sembako, cukup buka saja E-bako
                <br />
                dari rumah, solusi membeli sembako tanpa keluar rumah.
            </p>
            <a href="/signup" class="hero-btn">Belanja</a>
        </div>
    </section>

    <!--------landing page------->

    <section class="course">
        <h1>Mari Mulai Berbelanja di E-Bako<h1>
                <p>Apa saja yang ada di E-Bako?</p>

                <div class="row">
                    <div class="course-col">
                        <h3>Berbagai Sembako</h3>
                        <p>
                            Di E-Bako semua kebutuhan sembako yang anda butuhkan ada disini
                            tidak perlu repot-repot keluar rumah untuk membeli Sembako
                            pilih sembako dari e-bako yang anda butuhkan, lakukan pembayaran, tunggu
                            sembako anda datang ke rumah.</p>
                    </div>

                    <div class="course-col">
                        <h3>Kurir Pribadi</h3>
                        <p>
                            E-Bako menggunakan kurir pribadi yang sudah berpengalaman dalam urusan
                            mengantar barang, tenang saja, sembako anda pasti sampai di rumah Anda
                            dengan aman.</p>
                    </div>

                    <div class="course-col">
                        <h3>Sembako Berkualitas</h3>
                        <p>
                            Sembako yang anda dapatkan dari E-Bako kami pastikan dalam kualitas yang
                        terbaik yang sudah melewati pengecekan berkala yang kami lakukan, sehingga
                        anda dipastikan mendapat sembako dengan kualitas yang terbaik.</p>
                    </div>
                </div>
    </section>

    <!--------akhir landing page------->

    <!------ campus ----->

    <section class="campus">
        <h1>Gambaran 3 fitur utama E-Bako</h1>
        <p>Di bawah ini adalah 3 fitur utama dari website E-Bako ini</p>

        <div class="row">
            <div class="campus-col">
                <img src="img/Dashboard.png">
                <div class="layer">
                    <h3>Akun</h3>
                </div>
            </div>

            <div class="campus-col">
                <img src="img/Pendapatan.png">
                <div class="layer">
                    <h3>Keranjang</h3>
                </div>
            </div>

            <div class="campus-col">
                <img src="img/Pengeluaran.jpeg">
                <div class="layer">
                    <h3>Banyak Sembako</h3>
                </div>
            </div>
        </div>
    </section>

    <!------ akhir campus ----->

    <!----- testimoni pelanggan Penku ------->

    <section class="testimoni">
        <h1>Apa kata para Pelanggan E-Bako</h1>
        <p>Berikut adalah testimoni dari pelanggan</p>

        <div class="row">
            <div class="testimoni-col">
                <img src="img/JH.jpg">
                <div>
                    <p>
                        Website Ebako ini sangat membantu saya dalam mendapatkan sembako ketika saya
                        malas untuk keluar rumah, hanya tinggal pesan saja dari rumah, dan sembako saya
                        akan diantarkan ke rumah, mudah sekali.
                    </p>
                    <h3>Jaya Hartono</h3>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
            </div>

            <div class="testimoni-col">
                <img src="img/BS.png">
                <div>
                    <p>
                        E-Bako ini sangat memudahkan saya sekali sebagai pedagang saat membutuhkan
                        kebutuhan untuk toko saya di kala kehabisan stok, cepat sekali sampainya Sembako
                        yang saya pesan.</p>
                    <h3>Budi Sudarsono</h3>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
            </div>
        </div>
    </section>

    <!----- akhir testimoni pelanggan Penku ------->

    <!----- Kontak untuk aksi ------->

    <section class="cta" style="background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(img/diskusi.jpg);">
        <h1>Tunggu apa lagi? Mari segera daftar <br> dan mulai belanja sembako!</h1>
        <a href="/signup" class="hero-btn">Daftar</a>
    </section>

    <!----- Akhir Kontak untuk aksi ------->

    <!----- Footer ------->

    <section class="footer">
        <h4>Contact Us</h4>
        <ul>
            <li><a href="">cs@limakuli.com</a></li>
            {{-- <li><a href="">20523065@students.uii.ac.id</a></li>
            <li><a href="">20523077@students.uii.ac.id</a></li>
            <li><a href="">20523193@students.uii.ac.id</a></li>
            <li><a href="">20523182@students.uii.ac.id</a></li> --}}
        </ul>
        <p>
            Drop By
            Jl.Kaliurang 14,5, Krawitan, Umbulmartani, Ngemplak, Sleman Regency, Special Region of Yogyakarta 55584
        </p>
        <div class="icons">
            <i class="fa fa-facebook"></i>
            <i class="fa fa-twitter"></i>
            <i class="fa fa-instagram"></i>
            <i class="fa fa-linkedin"></i>
        </div>
        <p>Made with Love<i class="fa fa-heart-o"></i> by LIMAKULI</p>
    </section>

    <!----- Akhir Footer ------->


    <script>
        var navLinks = document.getElementById("navLinks")

        function showMenu() {
            navLinks.style.right = "0";
        }

        function hideMenu() {
            navLinks.style.right = "-200px";
        }
    </script>

</body>

</html>