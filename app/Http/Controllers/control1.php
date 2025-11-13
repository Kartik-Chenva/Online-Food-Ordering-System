<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class control1 extends Controller
{
    // public function display_msg()
    // {
    //     echo "Hello From Controller1";
    //     // return view('control_ex');
    //     return view('control_ex',['name'=>'Admin']);
    // }


    public function register_data(Request$req)
    {
        echo "Name : ".$req->name."<br>";
        echo "Email : ".$req->email."<br>";
        echo "Password : ".$req->pass."<br>";
        // return view('control_ex');
    }

    // public function login_data(Request$req)
    // {
    //     echo "Email : ".$req->email."<br>";
    //     echo "Password : ".$req->password."<br>";
    //     // return view('control_ex');
    // }

    public function review_data(Request$req)
    {
        echo "Rating : ".$req->rating."<br>";
        echo "Review : ".$req->reviewtext."<br>";
        echo "Name : ".$req->name."<br>";
        echo "Email : ".$req->email."<br>";
        // return view('control_ex');
    }

    // Method to handle form submission
    public function submitContactForm(Request$req)
    {
        echo "fullname : ".$req->fullname."<br>";
        echo "email : ".$req->email."<br>";
        echo "yournumber : ".$req->yournumber."<br>";
        echo "message : ".$req->message."<br>";
    }

   
}




    

