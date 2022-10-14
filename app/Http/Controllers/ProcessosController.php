<?php

namespace App\Http\Controllers;

use App\Models\Processo;
use App\Http\Requests\ProcessoRequest;
use Symfony\Component\Process\Process;

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

        return redirect()->route('processos');
    }

    public function destroy($id){
        Processo::find($id)->delete();
        return redirect()->route('processos');
    }

    public function edit($id){
        $processo = Processo::find($id);
        return view('processos.edit', compact('processo'));
    }

    public function update(ProcessoRequest $request, $id){
        Processo::find($id)->update($request->all());
        return redirect()->route('processos');
    }
}
