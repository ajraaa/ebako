<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>E-Bako</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/contact.css" />
</head>

<body>
    <section id="header">
        <a href="/"><img src="img/ebakologo.png" class="logo" alt="" /></a>

        <div>
            <ul id="navbar">
                <li><a href="/">Home</a></li>
                <li><a href="/shop">Shop</a></li>
                <li><a class="active" href="/contact">Contact</a></li>
                @if (Route::has('login'))
                    {{-- <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block"> --}}
                        @auth
                        <li><a href="{{ url('/redirect') }}">Dashboard</a></li>
                        @else
                        <li><a href="{{ route('login') }}">Log in</a></li>

                        @if (Route::has('register'))
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @endif
                        @endauth
                    {{-- </div> --}}
                    @endif
            </ul>
        </div>
    </section>

    <section id="page-header" style="background-image: url(img/comms.png);">
        <h2>#Let’s Talk</h2>
        <p>Leave message, we love to hear from you ! </p>
    </section>

    <section id="contact-details" class="section-p1">
        <div class="details">
            <span>Hubungi Kami</span>
            <h2>Kunjungi toko kami atau hubungi kami</h2>
            <h3>Toko Kami</h3>
            <div>
                <li>
                    <i class="fas fa-map-marked-alt"></i>
                    <p>Jl. Kaliurang No.KM.14,5, Sleman, Daerah Istimewa Yogyakarta 55581</p>
                </li>
                <li>
                    <i class="far fa-envelope"></i>
                    <p>e-bako@gmail.com</p>
                </li>
                <li>
                    <i class="fas fa-phone-alt"></i>
                    <p>+6289846279226</p>
                </li>
                <li>
                    <i class="fas fa-clock"></i>
                    <p>Buka setiap hari 09.00 - 21.00 WIB</p>
                </li>
            </div>
        </div>

        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.9432802320403!2d110.41142861472525!3d-7.689236594456964!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5e978e0917c1%3A0x3cd67019684210f!2sJl.%20Kaliurang%20No.KM.14%2C5%2C%20Candirejo%2C%20Sardonoharjo%2C%20Kec.%20Ngaglik%2C%20Kabupaten%20Sleman%2C%20Daerah%20Istimewa%20Yogyakarta%2055581!5e0!3m2!1sid!2sid!4v1657262675473!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    <script src="script.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"></script>
</body>

</html>