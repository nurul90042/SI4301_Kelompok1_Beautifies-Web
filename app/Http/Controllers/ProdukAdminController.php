<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukAdminController extends Controller
{
    public function index()
    {
     
        return view('product-manage');
        
    }
}
