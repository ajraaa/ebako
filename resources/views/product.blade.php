<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>E-Bako | Beli Sembako Online</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/shop.css" />
</head>

<body>
    <section id="header">
        <a href="/"><img src="/img/ebakologo.png" class="logo" alt="" /></a>

        @include("layouts.mainnav")
    </section>
    @if(session()->has('pesan'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">x</button>
            {{ session()->get('pesan') }}
            <br>
            <button type="button" class="btn btn-light"><a href="/cart">Lihat Keranjang</a></button>
        </div>
    @endif

    <section id="prodetails" class="section-p1">
        <div class="single-pro-image">
            <img src="/prodimg/{{ $product->imgurl }}" class="img-huge" width="100%" id="MainImg" alt="">
            <div class="small-img-group">
                <div class="small-img-col">
                    <img src="/prodimg/{{ $product->imgurl }}" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="/prodimg/{{ $product->imgurl }}" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="/prodimg/{{ $product->imgurl }}" width=" 100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="/prodimg/{{ $product->imgurl }}" width="100%" class="small-img" alt="">
                </div>
            </div>
        </div>

        <div class="single-pro-details">
            <h6>Barang / {{ $product->kategori }}</h6>
            <h4>{{ $product->nama }}</h4>
            <h2>Rp {{ $product->harga }}</h2>
            <form action="{{ url('addcart',$product->id) }}" method="POST">
                @csrf
                <input type="number" value="1" min="1" class="form-control" name="qty">
                <input type="submit" style="width: 100px" class="btn btn-primary" value="Keranjang +">
                {{-- <button class="btn btn-light">Add To Cart</button> --}}
            </form>
            {{-- <button class="btn btn-light">Beli Langsung</button> --}}
            <h4>Detail Produk</h4>
            <span>{{ $product->deskripsi }}</span>
        </div>
    </section>

    <section id="page-foot">
        <h2>Barang Lainnya</h2>
        <p>Daftar barang-barang lainnya</p>
    </section>

    <section id="product1" class="section-p1">
        <div class="pro-container">
            <div class="pro">
                <img src="../img/products/beras-1.png" alt="">
                <div class="des">
                    <span>Beras</span>
                    <h5>Beras Maknyuss 5kg</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rp 60.000</h4>
                    <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
                </div>
            </div>
            <div class="pro">
                <img src="../img/products/tepung-2.png" alt="">
                <div class="des">
                    <span>Tepung Terigu</span>
                    <h5>Tepung Terigu Segitiga Biru 1kg</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rp 11.000</h4>
                    <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
                </div>
            </div>
            <div class="pro">
                <img src="../img/products/gulaku.png" alt="">
                <div class="des">
                    <span>Gula</span>
                    <h5>Gulaku 1kg</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rp 16.000</h4>
                    <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
                </div>
            </div>
            <div class="pro">
                <img src="../img/products/dancow.png" alt="">
                <div class="des">
                    <span>Susu Bubuk</span>
                    <h5>Susu Bubuk Dancow 400g</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rp 45.000</h4>
                    <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
                </div>
            </div>
        </div>
    </section>

    <script>
        var MainImg = document.getElementById("MainImg");
        var smallimg = document.getElementsByClassName("small-img");

        smallimg[0].onclick = function() {
            MainImg.src = smallimg[0].src;
        }
        smallimg[1].onclick = function() {
            MainImg.src = smallimg[1].src;
        }
        smallimg[2].onclick = function() {
            MainImg.src = smallimg[2].src;
        }
        smallimg[3].onclick = function() {
            MainImg.src = smallimg[3].src;
        }
    </script>
    <script src="script.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"></script>
</body>

</html>

