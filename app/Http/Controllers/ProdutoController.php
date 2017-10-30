<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;
use Validator;

class ProdutoController extends Controller
{

    protected function validarProduto($request)
    {

        $validator = Validator::make($request->all(), [
            "descricao" => "required",
            "preco" => "required | numeric",
            "cor" => "required",
            "peso" => "required | numeric"
        ]);

        return $validator;

    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $qtd = $request['qtd'] ?: 2;
        $page = $request['page'] ?: 1;

        Paginator::currentPageResolver(function () use ($page) {
            return $page;
        });

        $produtos = DB::table('produtos')->paginate($qtd);
        return view('produtos.index', compact('produtos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('produtos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validator = $this->validarProduto($request);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }

        $dados = $request->all();
        Produto::create($dados);
        return redirect()->route('produtos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produto = Produto::find($id);
        return view('produtos.show', compact('produto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produto = Produto::find($id);
        return view('produtos.edit', compact('produto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $produto = Produto::find($id);
        $produto->update($request->all());
        return redirect()->route('produtos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produto = Produto::find($id);
        $produto->delete();
        return redirect()->route('produtos.index');
    }

    public function remover($id) {

        $produto = Produto::find($id);
        return view('produtos.remove', compact('produto'));

    }
}
