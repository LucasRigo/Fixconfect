<?php

namespace App\Http\Controllers;

use App\Models\Linha;
use App\Http\Requests\LinhaRequest;
use Symfony\Component\Process\Process;

class LinhasController extends Controller
{
    public function index(){
        $linhas = Linha::All();
        return view('linhas.index', ['linhas'=>$linhas]);
    }

    public function create(){
        return view('linhas.create');
    }

    public function store(LinhaRequest $request){
        $novo_linha = $request->all();
        Linha::create($novo_linha);

        return redirect()->route('linhas');
    }

    public function destroy($id){
        Linha::find($id)->delete();
        return redirect()->route('linhas');
    }

    public function edit($id){
        $linha = Linha::find($id);
        return view('linhas.edit', compact('linha'));
    }

    public function update(LinhaRequest $request, $id){
        Linha::find($id)->update($request->all());
        return redirect()->route('linhas');
    }
}
