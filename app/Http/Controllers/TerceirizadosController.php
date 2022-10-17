<?php

namespace App\Http\Controllers;

use App\Models\Terceirizado;
use App\Http\Requests\TerceirizadoRequest;
use Symfony\Component\Process\Process;

class TerceirizadosController extends Controller
{
    public function index(){
        $terceirizados = Terceirizado::All();
        return view('terceirizados.index', ['terceirizados'=>$terceirizados]);
    }

    public function create(){
        return view('terceirizados.create');
    }

    public function store(TerceirizadoRequest $request){
        $novo_terceirizado = $request->all();
        Terceirizado::create($novo_terceirizado);

        return redirect()->route('terceirizados');
    }

    public function destroy($id){
        Terceirizado::find($id)->delete();
        return redirect()->route('terceirizados');
    }

    public function edit($id){
        $terceirizado = Terceirizado::find($id);
        return view('terceirizados.edit', compact('terceirizado'));
    }

    public function update(TerceirizadoRequest $request, $id){
        Terceirizado::find($id)->update($request->all());
        return redirect()->route('terceirizados');
    }
}
