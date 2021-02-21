<?php

namespace App\Http\Controllers;

use App\Models\Livro;
use Illuminate\Http\Request;

class LivroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        return view('livro.list-produtos')->with('livros',Livro::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('livro.cadastro');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $livro = Livro::create([
            'nome_livro'=> $request->nome_livro,
            'tipo_livro'=> $request->tipo_livro,
            'preco_livro'=>$request->preco_livro,
        ]);
        return redirect()->route('livros.index')->with('status', 'Sucesso! Produto Cadastado.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('livro.edit')->with('livro', Livro::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $livro = Livro::find($id);
        $livro->nome_livro = $request->nome_livro;
        $livro->tipo_livro = $request->tipo_livro;
        $livro->preco_livro = $request->preco_livro;
        $livro->save();
        return back()->withInput()->with('status', 'Sucesso! Produto Alterado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $livro = Livro::find($id);
        $livro->delete();
        return redirect()->route('livros.index')->with('status', 'Sucesso! Produto Deletado.');
    }
}
