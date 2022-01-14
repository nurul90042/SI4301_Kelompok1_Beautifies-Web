<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
        $add->last_name = $request->customerlast_name;
        $add->user_name = $request->customeruser_name;
        $add->email = $request->customeremail;
        $add->password = Hash::make($request->customerpassword);

        $add->save();

        return redirect(route('login'))->with('success','Registration successfull! Please login');
    }
}