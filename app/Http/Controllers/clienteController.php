<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

class clienteController extends Controller
{

    public function index()
    {
        $clientes = Cliente::latest()->paginate(5);
        return view('clientes.index', compact('clientes'))->with('i',(request()->input('page',1) -1) *5);
    }

    public function create(){
        return view('clientes.clienteCadastro');
    }

    public function store(Request $request)
    {
        $request->validate([
          'nome' => 'required',
          'rg' => 'required',
          'cpf' => 'required',
          'data_nascimento' => 'required',
          'endereco' => 'required',
          'telefone_1' => 'required',
          'telefone_2' => 'required',
          'usuario' => 'required',
          'pass' => 'required',
          'cidade_id' => 'required',
        ]);
        $cliente = new Cliente([
            'nome' => $request->get('nome'),
            'rg' => $request->get('rg'),
            'cpf' => $request->get('cpf'),
            'data_nascimento' => $request->get('data_nascimento'),
            'endereco' => $request->get('endereco'),
            'telefone_1' => $request->get('telefone_1'),
            'telefone_2' => $request->get('telefone_2'),
            'usuario' => $request->get('usuario'),
            'pass' => $request->get('pass'),
            'cidade_id' => $request->get('cidade_id'),
        ]);
        $cliente->save();
        return redirect()->route('clientes.index')->with('success','Post created successfully');
    }

    public function show($id)
    {
        $cliente = Cliente::find($id);
        return view('clientes.show', compact('cliente'));
    }

    public function edit($id)
    {
        $post = Post::find($id);
        return view('clientes.edit', compact('cliente'));
    }

    public function update(Request $request, $id)
    {
      request()->validate([
        'nome' => 'required',
        'rg' => 'required',
        'cpf' => 'required',
        'data_nascimento' => 'required',
        'endereco' => 'required',
        'telefone_1' => 'required',
        'telefone_2' => 'required',
        'usuario' => 'required',
        'pass' => 'required',
        'cidade_id' => 'required',
      ]);
      Cliente::find($id)->update($request->all());
      return redirect()->route('clientes.index')->with('success','Post updated successfully');
    }

    public function destroy($id)
    {
        Cliente::find($id)->delete();
        return redirect()->route('clientes.index')->with('success','Post deleted successfully');
    }
}
