<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller{

    public function index(){
        $products = Product::all();

        return view('products.index', compact('products'));
    }

    public function create(){

        return view('product.create');
    }

    public function store(Request $request){

        $validateDate = $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
        ]);

        $product = Product::create($validateDate);
        $product->save();

        return redirect()->route('products.show', $product->id->with('succes', 'Produto criado com sucesso!'));
    }

    public function update(Request $request, $id){

        $validateDate = $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
        ]);

        $product = Product::findOrFail($id);
        $product->update($validateDate);

        return redirect()->route('products.show', $id)->with('success', 'Produto atualizado');
    }

    public function destroy($id){
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Produto excluido');
    }

    public function show($id) {
        $product = Product::findOrfail($id);

        return view('products.show', compact('product'));
    }

    public function edit($id){
        $product = Product::findOrFail($id);
        
        return view('products.edit', compact('product'));
    }
}
