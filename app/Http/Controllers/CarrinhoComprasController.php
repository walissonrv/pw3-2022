<?php

namespace App\Http\Controllers;

class CarrinhoComprasController
{
    public function index()
    {
        $itens=\Cart::getContent();
        //dd($itens);
        return view(vitrine.carrinho.index, compact(itens));
    }
    public function itensCarrinho(request $request){

        \cart::add(['id'=>'request->id'
	'name'=>'teclado'request->name,
	'price'=>790request->price,
	quantity request->
	'attributes'=>["image"=>'test.img'
        ]);
	return redirect()->route(vitrine-carrinho)
    }


}
