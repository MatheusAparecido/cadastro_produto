<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produtos = Products::all();

        return view('dashboard', compact('produtos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('produtos.create');
    }

    public function edit($id)
    {
        $produto = Products::find($id);
        return view('produtos.edit', compact('produto'));
    }

    public function store(Request $request)
    {

        $produto = new Products();
        $produto->nome = $request->nome;
        $produto->preco = $request->preco;
        $produto->marca = $request->marca;
        $produto->quantidade = $request->quantidade;
        $produto->save();

        return redirect()->route('dashboard')->with('success', 'Produto criado com sucesso!');
    }

    public function update(Request $request, $id)
    {
        $produto = Products::find($id);
        $produto->nome = $request->nome;
        $produto->preco = $request->preco;
        $produto->marca = $request->marca;
        $produto->quantidade = $request->quantidade;
        $produto->save();

        return redirect()->route('dashboard')->with('success', 'Produto atualizado com sucesso!');
    }

    public function destroy($id)
    {
        $produto = Products::find($id);
        $produto->delete();

        return redirect()->route('dashboard')->with('success', 'Produto excluído com sucesso!');
    }
}
