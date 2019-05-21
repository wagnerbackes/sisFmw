<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class produtosController extends Controller
{
    public function index(){
 		return view('produtos.index');
    }

    public function create(){
 		return view('produtos.create');
    }

    public function store(){
 		return view('produtos.store');
    }

    public function shows($produto){
 		return view('produtos.show');
    }

    public function edit($produto){
 		return view('produtos.index');
    }

    public function update(){
 		return view('produtos.index');
    }

    public function destroy($produto){
 		return view('produtos.index');
    }
}
