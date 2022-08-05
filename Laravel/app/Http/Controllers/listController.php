<?php

namespace App\Http\Controllers;

use App\Models\ListProducts;
use Illuminate\Http\Request;

class listController extends Controller
{
    public function Busca(Request $request)
    {
        $ListProducts = ListProducts::all();

        return response()->json($ListProducts);
    }

    public function Busca_id($id){
        if (ListProducts::where('id', $id)->exists()) {
            $product = ListProducts::find($id);
                return response($product, 200);
              } else {
                return response()->json([
                  "message" => "Product not found."
                ], 404);
              }
    }

    public function Criar(Request $request)
    {
        $newProduct = new ListProducts();
        $newProduct->codigo = $request->codigo;
        $newProduct->nome = $request->nome;
        $newProduct->valor = $request->valor;
        $newProduct->estoque = $request->estoque;
        $newProduct->cidade = $request->cidade;
        $newProduct->save();

        return response()->json("OK");
    }

    public function Editar(Request $request, $id)
    {
        if (ListProducts::where('id', $id)->exists()) {
            $product = ListProducts::find($id);
            $product->codigo = is_null($request->codigo) ? $product->codigo : $request->codigo;
            $product->nome = is_null($request->nome) ? $product->nome : $request->nome;
            $product->valor = is_null($request->valor) ? $product->valor : $request->valor;
            $product->estoque = is_null($request->estoque) ? $product->estoque : $request->estoque;
            $product->cidade = is_null($request->cidade) ? $product->cidade : $request->cidade;
            $product->save();
    
            return response()->json([
                "message" => "records updated successfully"
            ], 200);
            } else {
            return response()->json([
                "message" => "Student not found"
            ], 404);
            
        }
    }

    public function tom(Request $request, $id)
    {
        if (ListProducts::where('id', $id)->exists()) {
            $product = ListProducts::find($id);
    
            return response()->json($product);

        }
    }

    public function Deletar(ListProducts $product, Request $request)
    {
        $product->delete();

        return response()->json("OK");
    }

}

