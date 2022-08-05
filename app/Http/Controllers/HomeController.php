<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Cart;
use App\Models\Product;

class HomeController extends Controller
{
    public function redirect()
    {
        $usertype=Auth::user()->usertype;

        if($usertype==true)
        {
            return view('admin.home');
        } else {
            return view('index');
        }
    }

    public function index()
    {
        return view('index');
    }

    public function addcart(Request $request, $id)
    {
        if(Auth::id())
        {
            $user = Auth()->user();
            $product = product::find($id);
            $cart = new cart;
            
            $cart->nama=$user->name;
            $cart->telpon=$user->phone;
            $cart->alamat=$user->address;
            $cart->nama_produk=$product->nama;
            $cart->harga=$product->harga;
            $cart->jumlah=$request->qty;
            $cart->save();

            return redirect()->back()->with('pesan', 'Barhasil Ditambahkan.');
        } else {
            return redirect('login');
        }
    }
}
