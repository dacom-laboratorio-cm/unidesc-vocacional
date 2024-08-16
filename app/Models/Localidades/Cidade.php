<?php

namespace App\Models\Localidades;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Escola extends Model
{
    protected $fillable = ['nm_escola'];

    // public function estado()
    // {
    //     return $this->hasOne(Estado::class, 'id');
    // }

    public static function getEscolas()
    {
        return DB::table('escolas')
            // ->join('escolas', 'id', '=', 'id')
            // ->orWhere('sg_estado', $sigla)
            // ->orWhere('cidades.estado_id', $sigla)
            ->select
            (
                // 'cidades.id AS cidade_id',
                'nm_escola'
                // 'nm_estado',
                // 'sg_estado'
            )
            ->get();
    }

}
