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
                    <li><a href="">HOME</a></li>
                    <li><a href="">SHOP</a></li>
                    <li><a href="">CONTACT</a></li>
                    <li><a href="">LOGIN</a></li>
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
                            Di dalam fitur Dashboard ini anda dapat memantu berapa total dari pemasukan dan pengeluaran
                            yang anda dapatkan, tidak hanya itu saja di dalam fitur ini anda juga
                            dapat mengetahui saldo dari hasil pendapatan dan pengeluaran anda.
                            Bukan cuman itu aja loo tapi anda juga bisa memfilter tanggal apabila anda ingin melihat
                            saldo sesuai tanggal yang anda inginkan.</p>
                    </div>

                    <div class="course-col">
                        <h3>Kurir Pribadi</h3>
                        <p>
                            Pada fitur catat pendapatan ini anda dapat melakukan pencatatan pendapatan anda secara
                            mandiri dan pastinya aman looo.
                            Anda dapat mencatat semua pendapatan yang anda dapatkan.</p>
                    </div>

                    <div class="course-col">
                        <h3>Sembako Berkualitas</h3>
                        <p>
                            Pada fitur catat pengeluaran ini anda dapat melakukan pencatatan pengeluaran anda secara
                            mandiri dan pastinya aman looo.
                            Anda dapat mencatat semua pengeluaran yang anda dapatkan.</p>
                    </div>
                </div>
    </section>

    <!--------akhir landing page------->

    <!------ campus ----->

    <section class="campus">
        <h1>Gambaran 3 fitur utama website Penku</h1>
        <p>Di bawah ini adalah 3 fitur utama dari website Penku ini</p>

        <div class="row">
            <div class="campus-col">
                <img src="img/Dashboard.png">
                <div class="layer">
                    <h3>Dashboard</h3>
                </div>
            </div>

            <div class="campus-col">
                <img src="img/Pendapatan.png">
                <div class="layer">
                    <h3>Pendapatan</h3>
                </div>
            </div>

            <div class="campus-col">
                <img src="img/Pengeluaran.jpeg">
                <div class="layer">
                    <h3>Pengeluaran</h3>
                </div>
            </div>
        </div>
    </section>

    <!------ akhir campus ----->

    <!----- testimoni pelanggan Penku ------->

    <section class="testimoni">
        <h1>Apa kata para Pelaku Ukm</h1>
        <p>Berikut adalah testimoni dari pengguna website Penku</p>

        <div class="row">
            <div class="testimoni-col">
                <img src="img/JH.jpg">
                <div>
                    <p>
                        Website Penku ini sangat membantu saya dalam melakukan pencatatan keuagan UKM saya.
                        Dulu saya sangat bingung sekali bagaimana melakukan pencatatan keuangan UKM saya,
                        tetapi setelah saya mengenal Penku saya menjadi lebih mudah dalam melakukan pencatatan keuangan
                        UKM saya.
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
                        Dulu saya selalu mencatat hasil pendapatan dan pengeluaran UKM saya di buku dan itu ada sebagian
                        catatan saya hilang.
                        Kejadian itu sangat membuat saya khawatir karena saya harus menulis dan mengingat - ingat
                        catatan pendapatan dan pengeluaran UKM saya lagi.
                        Tapi setelah saya menggunakan website Penku ini saya merasa sangat senang karena saya bisa
                        mencatat pendapatan dan pengeluaran saya secara berkala dan pastinya data saya aman.</p>
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