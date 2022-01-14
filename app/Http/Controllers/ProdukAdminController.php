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

        $gambarproduk = time().'img'.'.'.$request->gambarproduk->extension();

        $request->gambarproduk->move(public_path('image'),$gambarproduk);

        $produk = new Produk();
        $produk->id=$request->idVaccine;
        $produk->kode_produk=$request->name;
        $produk->nama_produk=$request->nik;
        $produk->harga_produk=$request->alamat;
        $produk->gambarproduk=$gambarproduk;
        $produk->save();

        return redirect(route('product-manage'));

    }
}
