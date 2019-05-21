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

     public function show($nome){
     	$data =  array('nome'=>$nome);
 		return view('segunda', $data);
    }

      public function terceiraView(){
 		return view('terceiraView');
    }
}
