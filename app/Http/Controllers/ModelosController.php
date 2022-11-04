<?php

namespace App\Http\Controllers;

use App\Models\Modelo;
use App\Http\Requests\ModeloRequest;
use App\Models\ModeloCor;
use App\Models\ModeloProcesso;
use Symfony\Component\Process\Process;

class ModelosController extends Controller
{
    public function index(){
        $modelos = Modelo::All();
        return view('modelos.index', ['modelos'=>$modelos]);
    }

    public function create(){
        return view('modelos.create');
    }

    public function store(ModeloRequest $request){

        $modelo = Modelo::create([
            'referencia' => $request->get('referencia'),
        ]);

        $cores = $request->cors;
        foreach($cores as $a => $value) {
            ModeloCor::create([
                'modelo_id' => $modelo->id,
                'cor_id' => $cores[$a]
            ]);
        }


        $processos = $request->processos;
        foreach($processos as $a => $value) {
            ModeloProcesso::create([
                'modelo_id' => $modelo->id,
                'processo_id' => $processos[$a]
            ]);
        }

        return redirect()->route('modelos');
    }

    public function destroy($id){
        Modelo::find($id)->delete();
        return redirect()->route('modelos');
    }

    public function edit($id){
        $modelo = Modelo::find($id);
        return view('modelos.edit', compact('modelo'));
    }

    public function update(ModeloRequest $request, $id){
        Modelo::find($id)->update($request->all());
        return redirect()->route('modelos');
    }
}
