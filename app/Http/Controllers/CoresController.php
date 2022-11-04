<?php

namespace App\Http\Controllers;

use App\Models\Cor;
use App\Http\Requests\CorRequest;
use Symfony\Component\Process\Process;

class CoresController extends Controller
{
    public function index(){
        $cores = Cor::All();
        return view('cores.index', ['cores'=>$cores]);
    }

    public function create(){
        return view('cores.create');
    }

    public function store(CorRequest $request){
        $nova_cor = $request->all();
        Cor::create($nova_cor);

        return redirect()->route('cores');
    }

    public function destroy($id){
        Cor::find($id)->delete();
        return redirect()->route('cores');
    }

    public function edit($id){
        $cor = Cor::find($id);
        return view('cores.edit', compact('cor'));
    }

    public function update(CorRequest $request, $id){
        Cor::find($id)->update($request->all());
        return redirect()->route('cores');
    }
}
