<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class operacoes extends Controller {
    
    public function soma(Request $request) {
        $param1 = $request->input('primeiroParametro');
        $param2 = $request->input('segundoParametro');
        $resultado = $param1 + $param2;
        return view('soma', ['resultado' => $resultado] );
    }

    public function multiplicacao(Request $request) {
        $param1 = $request->input('primeiroParametro');
        $param2 = $request->input('segundoParametro');
        $resultado = $param1 * $param2;
        return view('multiplicacao', ['resultado' => $resultado] );
    }
    
    public function divisao(Request $request) {
        $param1 = $request->input('primeiroParametro');
        $param2 = $request->input('segundoParametro');  
        $resultado = $param1 / $param2;
        return view('divisao', ['resultado' => $resultado] );  
    }

    public function subtracao(Request $request) {
        $param1 = $request->input('primeiroParametro');
        $param2 = $request->input('segundoParametro');  
        $resultado = $param1 - $param2;
        return view('subtracao', ['resultado' => $resultado] );  
    }

}
