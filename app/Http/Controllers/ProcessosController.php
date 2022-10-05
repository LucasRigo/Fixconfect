<?php

namespace App\Http\Controllers;

use App\Models\Processo;
use App\Http\Requests\ProcessoRequest;

class ProcessosController extends Controller
{
    public function index(){
        $processos = Processo::All();
        return view('processos.index', ['processos'=>$processos]);
    }

    public function create(){
        return view('processos.create');
    }

    public function store(ProcessoRequest $request){
        $novo_processo = $request->all();
        Processo::create($novo_processo);

        return redirect('processos');
    }
}
