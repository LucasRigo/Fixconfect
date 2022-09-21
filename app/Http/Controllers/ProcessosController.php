<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProcessosController extends Controller
{
    public function index(){
        $nome = "teste";
        return view('processos', ['nome'=>$nome]);
    }
}
