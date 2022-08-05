{{-- @dd($products) --}}

@extends('layouts.main')

@section('container')
        @foreach ($products as $product)
        <div class="pro" onclick="window.location.href='/shop/{{ $product->id }}' ">
            <img src="prodimg/{{ $product->imgurl }}" alt="">
            <div class="des">
                <span>{{ $product->kategori }}</span>
                <h5>{{ $product->nama }}</h5>
                <div class=" star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>Rp {{ $product->harga }}</h4>
                {{-- <form action="" method="post">
                    @csrf
                    <input class="fa-solid fa-cart-shopping cart" type="submit" value=""></i>
                </form> --}}
                {{-- <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a> --}}
            </div>
        </div>
        @endforeach
@endsection