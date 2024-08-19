<?php

use Illuminate\Support\Facades\Route;


Route::group(['namespace' => 'APIs'], function (){
    Route::get('/questoes', 'APIQuestaoController@getQuestoes');
    Route::get('/escolas', 'APILocalidadesController@getEscolas')->name('api.get.escolas');
    // Route::get('/cidades/{estado}', 'APILocalidadesController@getCidadesByEstado')->name('api.get.cidades');
});
