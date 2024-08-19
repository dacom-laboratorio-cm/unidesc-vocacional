<?php

namespace App\Http\Controllers\APIs;

use App\Models\Localidades\Escola;
// use App\Models\Localidades\Estado;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class APILocalidadesController extends Controller
{
    public function getEscolas()
    {
        return Escola::all('id', 'nm_escola');
    }

    // public function getCidadesByEstado($estado)
    // {
    //     return Cidade::cidadesByEstado(strtoupper($estado));
    // }
}
