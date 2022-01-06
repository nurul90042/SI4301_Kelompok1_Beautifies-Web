<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GrafikAdminController extends Controller
{
    public function index()
    {
     
        return view('grafik-admin');
        
    }
}
