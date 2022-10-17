<?php

namespace App\Http\Controllers;

use App\Models\Aparelho;
use App\Http\Requests\AparelhoRequest;
use Symfony\Component\Process\Process;

class AparelhosController extends Controller
{
    public function index(){
        $aparelhos = Aparelho::All();
        return view('aparelhos.index', ['aparelhos'=>$aparelhos]);
    }

    public function create(){
        return view('aparelhos.create');
    }

    public function store(AparelhoRequest $request){
        $novo_aparelho = $request->all();
        Aparelho::create($novo_aparelho);

        return redirect()->route('aparelhos');
    }

    public function destroy($id){
        Aparelho::find($id)->delete();
        return redirect()->route('aparelhos');
    }

    public function edit($id){
        $aparelho = Aparelho::find($id);
        return view('aparelhos.edit', compact('aparelho'));
    }

    public function update(AparelhoRequest $request, $id){
        Aparelho::find($id)->update($request->all());
        return redirect()->route('aparelhos');
    }
}
