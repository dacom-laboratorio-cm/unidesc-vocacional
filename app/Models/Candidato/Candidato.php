<?php

namespace App\Models\Candidato;

use App\Models\Localidades\Escola;
use App\Services\CandidatoServices;
use App\Models\Localidades\Cidade;
use App\Models\Universidade\Universidade;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Candidato extends Model
{
    Use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $fillable = ['nome', 'escola_id', 'escolaridade_id', 'resultado_id',
                           'visitor', 'universidade_id'];

    public function escola()
    {
        return $this->hasOne(Escola::class, 'id', 'escola_id');
    }

    public function resultado()
    {
        return $this->hasOne(ResultadoCand::class, 'id');
    }

    public function universidade()
    {
        return $this->hasOne(Universidade::class, 'id', 'universidade_id');
    }

    public static function storeCandidato($dadosCand, $resultadoID)
    {
        $dadosCand += ['resultado_id' => $resultadoID];
        return Candidato::create($dadosCand);
    }

    public static function getAllData()
    {
        return Candidato::all();
    }

    public static function getByDate($filtro)
    {

        if($filtro->dt_fim == $filtro->dt_inicio) {
            return Candidato::where('created_at', 'like', $filtro->dt_fim.'%')->get();
        }

        return Candidato::where('created_at', '<=', $filtro->dt_fim)
                        ->where('created_at', '>=', $filtro->dt_inicio)
                        ->get();

    }

}
