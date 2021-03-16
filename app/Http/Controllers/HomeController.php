<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dress;

class HomeController extends Controller

{
    public function index(){
        $data = [
            'saluto' => 'Ciao a tutti'
                ];
        return view('home', $data);
    }

    public function abiti(){
        $dati_abiti = Dress::all();
        $data = [
            'abiti' => $dati_abiti,
        ];
        
        return view('abiti', $data);
    }

    public function contatti(){
        $data = [
            'email' => 'nome@mail.com',
            'tel' => '123456'
        ];

        return view('contatti', $data);
    }
}
