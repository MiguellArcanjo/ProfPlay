<?php

namespace App\Http\Controllers;

use App\Models\Cadastro;
use Illuminate\Http\Request;

class CadastroControlador extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cadastro = Cadastro::all();
        return view('login.login', compact('cadastro'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cadastro.paginaCadastro');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'email' => 'required',
            'datanascimento' => 'required',
            'nome' => 'required',
            'senha1' => 'required',
            'senha2' => 'required',
        ]);

        $cadastro = new Cadastro();
        $cadastro->email = $request->input('email');
        $cadastro->datanascimento = $request->input('datanascimento');
        $cadastro->nome = $request->input('nome');
        $cadastro->senha1 = $request->input('senha1');
        $cadastro->senha2 = $request->input('senha2');
        $cadastro->save();
        return redirect('/login');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
