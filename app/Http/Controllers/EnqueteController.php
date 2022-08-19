<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enquete;

class EnqueteController extends Controller
{
    public function create(){
        return view('enquetes.create');
    }
    public function store(Request $request){
        Enquete::create()([
            'titulo' => $request->titulo,
            'opcao1' => $request->opcao1,
            'opcao2' => $request->opcao2,
            'opcao3' => $request->opcao3,
            'created_at' => $request->created_at,
            'expires_at' => $request->expires_at,
        ]);
        return "Enquete excluída com sucesso.";
    }
    public function listar(){
        $enquetes = Enquete::all();
        return view('enquetes.listar',['enquetes' => $enquetes]);
    }
    public function show(){
        $enquetes = Enquete::all();
        return view('enquetes.todos',['enquetes' => $enquetes]);
    }
    public function destroy($id){
        $enquetes=Enquete::findOrFail($id);
        $enquetes->delete();
        return "Enquete excluída com sucesso.";
    }
    public function edit($id){
        $enquetes = Enquete::findOrFail($id);
        return view('enquetes.editar', ['enquetes' => $enquetes]);
    }
    public function update(Request $request, $id){
        $enquetes = Enquete::findOrFail($id);
        $enquetes->update([
            'titulo' => $request->titulo,
            'opcao1' => $request->opcao1,
            'opcao2' => $request->opcao2,
            'opcao3' => $request->opcao3,
            'created_at' => $request->created_at,
            'expires_at' => $request->expires_at,
        ]);
        return "Enquete atualizada com sucesso.";
    }
}
