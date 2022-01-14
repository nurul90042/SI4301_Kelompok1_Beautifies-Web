<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
     
        return view('register');
        
    } 

    public function store(Request $request)
    {
        $add = new User();

        $add->name = $request->customerfirst_name;
        $add->email = $request->customeremail;
        $add->password = $request->customerpassword;

        $add->save();

        return redirect(route('login'))->with('success','Registration successfull! Please login');
    }
}