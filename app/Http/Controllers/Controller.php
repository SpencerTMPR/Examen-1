<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function inicio(){
        return view('inicio');
    }

    public function tiposAsiento(){
        return view('tiposAsientos');
    }


    public function agregarTipoAsiento(){
        return view('agregarTipoAsiento');
}
}

   

