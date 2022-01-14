<?php

namespace App\Http\Controllers;
use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukAdminController extends Controller
{
    public function index()
    {
        $produk = Produk::all();
        return view('product-manage', ['produks'=>$produk],['name'=>$produk]);
        
    }

    public function addproduct(Request $request){

        // $gambarproduk = time().'img'.'.'.$request->gambarproduk->extension();

        // $request->gambarproduk->move(public_path('image'),$gambarproduk);
        $char = "1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $length_c = strlen($char);
        $randomString = '';
            for ($i = 0; $i < $length_c; $i++) {
                $randomString .= $char[rand(0, $length_c - 1)];
            }
        $produk = new Produk();
        $produk->id=$request->id;
        $produk->kode_produk=$request->kode_produk;
        $produk->nama_produk=$request->nama_produk;
        $produk->harga_produk=$request->harga_produk;
        // $produk->gambarproduk=$gambarproduk;
        $produk->save();

        return redirect(route('product-manage'));

    }
}
