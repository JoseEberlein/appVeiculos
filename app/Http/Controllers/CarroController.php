<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Carro;

class CarroController extends Controller
{
    public function FormularioCadastroCarro(){
        return view('cadastrarCarro');
    } 

    public function EditarCarro(){
        return view('editarCarro');
    }

    public function SalvarBancoCarro(Request $request){
        $dadosCarro = $request->validate([
            'modelo' => 'string|required',
            'marca' => 'string|required',
            'ano' => 'string|required',
            'cor' => 'string|required',
            'valor' => 'string|required'
        ]);
        Carro::create($dadosCarro);
        return Redirect::route('home');
    }
     
}
