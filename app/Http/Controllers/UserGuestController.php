<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserGuestController extends Controller
{
    public function index()
    {
     
        return view('home-guest');
        
    }
}