<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopAdminController extends Controller
{
    public function index()
    {
     
        return view('shop-manage');
        
    }
}
