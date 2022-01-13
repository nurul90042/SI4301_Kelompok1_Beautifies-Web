<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutMemberController extends Controller
{
    public function index()
    {
     
        return view('about-member');
        
    }
}
