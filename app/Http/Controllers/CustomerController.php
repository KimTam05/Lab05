<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function register(){
        return view("register");
    }

    public function check_register(Request $request){
        $data = $request ->validate([
            "userid"=>"required|min:5|max:12",
            "password"=> "required|min:5|max:12",
            "name"=> "required|alpha",
            "country"=>"required",
            "zipcode"=>"required|numeric",
            "email"=> "required|email",
            "sex" => "required",
            "language"=> "required",
        ]);

        dd($data);
    }
}
