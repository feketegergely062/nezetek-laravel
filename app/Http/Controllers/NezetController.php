<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NezetController extends Controller
{
    public function getView(){
        
        $name = "Béla";
        $email = "bela@email.lan";

        return view("para",compact("name","email"));

    }
}
