<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    //diplay the demo page

    public function hello(){
        return view('demo');//this will display the demo.blade.php view
    }
}
