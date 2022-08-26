<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    //
    public function mostrarNome($nome){

        $B = 10;
        $A =10;
        $res= $A+$B;
        return $res;
    }
    public function soma($n1, $n2){
        $soma = $n1 +$n2;
        return view('soma', compact('soma'));
    }
}
