<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        return view('shop', [
            "products" => Product::all()
        ]);
    }

    public function stok()
    {
        return view('admin.stok', [
            "products" => Product::all()
        ]);
    }

    public function show(Product $product)
    {
        return view('product', [
            "product" => $product
        ]);
    }

    public function uploadProduct(Request $request){
        $data = new product;
        $image = $request->img;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->img->move('prodimg', $imagename);

        $data->imgurl = $imagename;

        $data->nama = $request->nama;
        $data->harga = $request->harga;
        $data->stok = $request->stok;
        $data->nama = $request->nama;
        $data->deskripsi = $request->deskripsi;
        $data->kategori = $request->kategori;

        $data->save();
        return redirect()->back()->with('pesan', 'Produk Berhasil Ditambahkan.');
    }

    public function deleteProduct($id)
    {
        $data = product::find($id);

        $data->delete();

        return redirect()->back()->with('pesan', 'Produk Berhasil Dihapus.');
    }

    public function update($id)
    {
        $data = product::find($id);
        return view('admin.updatedata', compact('data'));
    }

    public function updateproduct(Request $request, $id)
    {
        $data = product::find($id);
        $image = $request->img;
        if($image)
        {
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->img->move('prodimg', $imagename);

            $data->imgurl = $imagename;
        }
        $data->nama = $request->nama;
        $data->harga = $request->harga;
        $data->stok = $request->stok;
        $data->nama = $request->nama;
        $data->deskripsi = $request->deskripsi;
        $data->kategori = $request->kategori;

        $data->save();
        return redirect()->back()->with('pesan', 'Produk Berhasil Diedit.');
    }

    public static function totalpenjualan()
    {
        $terjual = Product::sum('terjual');
        $harga = Product::sum('harga');
        $totalpenjualan = $terjual*$harga;
        $format = number_format($totalpenjualan/100,2);
        return $format;
    }

    public static function totalterjual()
    {
        $terjual = Product::sum('terjual');
        return $terjual;
    }
}
