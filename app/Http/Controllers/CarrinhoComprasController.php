<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Subcategoria;
use App\Models\Produto;
use Illuminate\Http\Request;



class CarrinhoComprasController extends Controller

{
    public function index(){
        $categorias =Categoria::all();
        $subcategorias =Subcategoria::all();
        $itens = \Cart::getContent();

        return view('vitrine.carrinho.index', compact('itens','categorias', 'subcategorias'));

    }
    public function adicionarItemCarrinho(request $request){
        \Cart::add([
            'id'=>$request ->id,
            'name'=>$request->name,
            'price'=>$request->price,
            'quantity'=>$request->quantity,
            'attributes'=>['image'=>$request->image]



        ]);
        return redirect()->route('vitrine.updcarrinho');

    }
    public function removerItemCarrinho(request $request){
        \Cart::remove($request->id);

        return redirect()->route('vitrine.delcarrinho');

    }
    public function alterarItemCarrinho(Request $request){
        \Cart::update($request->id, array(
            'quantity'=>array(
                'relative'=>false,
                'value'=>$request->quantity,
            )
        ));
           return redirect()->route('vitrine.updcarrinho');
    }
    public function limparCarrinho(){
        \Cart::clear();

        return redirect()->route('vitrine.index');

    }

}
