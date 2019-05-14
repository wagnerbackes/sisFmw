<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testeController extends Controller
{
    public function primeiraView(){
 		return view('primeiraView.primeira');
    }

     public function segundaView(){
 		return view('segunda');
    }
}
