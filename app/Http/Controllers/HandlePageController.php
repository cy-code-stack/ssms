<?php

namespace App\Http\Controllers;

class HandlePageController extends Controller
{
    // public function __construct(){
    //     $this->middleware("auth");
    // }
    
    public function handleAdmin(){
        return view("Dashboard.master");
    }
}
