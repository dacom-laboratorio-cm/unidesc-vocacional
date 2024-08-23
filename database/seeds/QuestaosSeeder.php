<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestaosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questoes')->insert([


            // Grupo A
            [
                'alternativa' => 'A', 'texto_alternativa' => 'Estudar sobre inteligência artificial',
                'grupo' => 'A'],
            [
                'alternativa' => 'B', 'texto_alternativa' => 'Saber como um celular funciona',
                'grupo' => 'A'],
            [
                'alternativa' => 'A', 'texto_alternativa' => 'Desenvolver videogames',
                'grupo' => 'A'],
            [
                'alternativa' => 'B', 'texto_alternativa' => 'Estudar sobre circuitos eletrônicos',
                'grupo' => 'A'],
            [
                'alternativa' => 'A', 'texto_alternativa' => 'Desenvolver um site e aplicativos',
                'grupo' => 'A'],
            [
                'alternativa' => 'B', 'texto_alternativa' => 'Entender sobre Internet das Coisas',
                'grupo' => 'A'],
            [
                'alternativa' => 'A', 'texto_alternativa' => 'Entender sobre segurança digital',
                'grupo' => 'A'],
            [
                'alternativa' => 'B', 'texto_alternativa' => 'Entender como é feito uma placa eletrônica',
                'grupo' => 'A'],
            [
                'alternativa' => 'A', 'texto_alternativa' => 'Desenvolver software para empresas',
                'grupo' => 'A'],
            [
                'alternativa' => 'B', 'texto_alternativa' => 'Saber como projetar um processador',
                'grupo' => 'A'],
            [
                'alternativa' => 'A', 'texto_alternativa' => 'Estudar sobre algoritmos',
                'grupo' => 'A'],
            [
                'alternativa' => 'B', 'texto_alternativa' => 'Saber prototipagem eletrônica',
                'grupo' => 'A'],
            // Grupo B
            [
                'alternativa' => 'A', 'texto_alternativa' => 'Saber selecionar e testar materiais de construção',
                'grupo' => 'B'],
            [
                'alternativa' => 'A', 'texto_alternativa' => 'Construir barragens',
                'grupo' => 'B'],
            [
                'alternativa' => 'B', 'texto_alternativa' => 'Planejar a planta de uma  casa',
                'grupo' => 'B'],
            [
                'alternativa' => 'A', 'texto_alternativa' => 'Planejar a construção de uma ponte',
                'grupo' => 'B'],
            [
                'alternativa' => 'B', 'texto_alternativa' => 'Planejar o sistema de esgoto de uma cidade',
                'grupo' => 'B'],
            [
                'alternativa' => 'B', 'texto_alternativa' => 'Restaurar um edifício histórico',
                'grupo' => 'B'],
            [
                'alternativa' => 'A', 'texto_alternativa' => 'Estudar o comportamento do solo e das rochas do local de uma construção',
                'grupo' => 'B'],
            [
                'alternativa' => 'B', 'texto_alternativa' => 'Trabalhar em obras de urbanização',
                'grupo' => 'B'],
            [
                'alternativa' => 'A', 'texto_alternativa' => 'Planejar a construção de apartamentos ',
                'grupo' => 'B'],
            [
                'alternativa' => 'B', 'texto_alternativa' => 'Construir  estradas e rodovias',
                'grupo' => 'B'],
            [
                'alternativa' => 'A', 'texto_alternativa' => 'Construir uma escola',
                'grupo' => 'B'],
            [
                'alternativa' => 'B', 'texto_alternativa' => 'Entender sobre infraestrutura',
                'grupo' => 'B'],
            // Grupo C
            [
                'alternativa' => 'A', 'texto_alternativa' => 'Estudar sobre meio ambiente',
                'grupo' => 'C'],
            [
                'alternativa' => 'B', 'texto_alternativa' => 'Estudar sobre energias renováveis',
                'grupo' => 'C'],
            [
                'alternativa' => 'A', 'texto_alternativa' => 'Desenvolver soluções de reciclagem',
                'grupo' => 'C'],
            [
                'alternativa' => 'B', 'texto_alternativa' => 'Desenvolver soluções para o tratamento de água',
                'grupo' => 'C'],
            [
                'alternativa' => 'A', 'texto_alternativa' => 'Monitorar a qualidade do ar, água e solo',
                'grupo' => 'C'],
            [
                'alternativa' => 'B', 'texto_alternativa' => 'Planejar o tratamento de um rio',
                'grupo' => 'C'],
            [
                'alternativa' => 'A', 'texto_alternativa' => 'Planejar o desenvolvimento sustentável de uma região',
                'grupo' => 'C'],
            [
                'alternativa' => 'B', 'texto_alternativa' => 'Trabalhar em projetos de preservação ambiental ',
                'grupo' => 'C'],
            [
                'alternativa' => 'A', 'texto_alternativa' => 'Monitorar mudanças climáticas',
                'grupo' => 'C'],
            [
                'alternativa' => 'B', 'texto_alternativa' => 'Planejar projetos de reflorestamento',
                'grupo' => 'C'],
            [
                'alternativa' => 'A', 'texto_alternativa' => 'Fazer estudos sobre impacto ambiental',
                'grupo' => 'C'],
            [
                'alternativa' => 'B', 'texto_alternativa' => 'Estudar sobre como diminuir a poluição do ar',
                'grupo' => 'C'],
            // Grupo D
            [
                'alternativa' => 'A', 'texto_alternativa' => 'Desenvolver produtos de limpeza',
                'grupo' => 'D'],
            [
                'alternativa' => 'B', 'texto_alternativa' => 'Trabalhar em  indústrias químicas',
                'grupo' => 'D'],
            [
                'alternativa' => 'A', 'texto_alternativa' => 'Desenvolver produtos para a indústria farmacêutica',
                'grupo' => 'D'],
            [
                'alternativa' => 'B', 'texto_alternativa' => 'Estudar química orgânica',
                'grupo' => 'D'],
            [
                'alternativa' => 'A', 'texto_alternativa' => 'Trabalhar em laboratórios de química ',
                'grupo' => 'D'],
            [
                'alternativa' => 'B', 'texto_alternativa' => 'Saber como acontecem as reações químicas',
                'grupo' => 'D'],
            [
                'alternativa' => 'A', 'texto_alternativa' => 'Desenvolver práticas para garantir a segurança em processos químicos industriais',
                'grupo' => 'D'],
            [
                'alternativa' => 'B', 'texto_alternativa' => 'Trabalhar em grandes empresas de petróleo',
                'grupo' => 'D'],
            [
                'alternativa' => 'A', 'texto_alternativa' => 'Saber como retirar a matéria-prima do meio ambiente e evitar danos ambientais',
                'grupo' => 'D'],
            [
                'alternativa' => 'B', 'texto_alternativa' => 'Estudar sobre energia nuclear',
                'grupo' => 'D'],
            [
                'alternativa' => 'A', 'texto_alternativa' => 'Ensinar sobre química',
                'grupo' => 'D'],
            [
                'alternativa' => 'B', 'texto_alternativa' => 'Desenvolver equipamentos para usos em processos industriais químicos',
                'grupo' => 'D'],
            // Grupo E
            [
                'alternativa' => 'A', 'texto_alternativa' => 'Criar novos produtos alimentícios',
                'grupo' => 'E'],
            [
                'alternativa' => 'B', 'texto_alternativa' => 'Desenvolver um novo sabor para um alimento industrializado',
                'grupo' => 'E'],
            [
                'alternativa' => 'A', 'texto_alternativa' => 'Coordenar a  produção em fábricas de alimentos',
                'grupo' => 'E'],
            [
                'alternativa' => 'B', 'texto_alternativa' => 'Criar embalagens para alimentos',
                'grupo' => 'E'],
            [
                'alternativa' => 'A', 'texto_alternativa' => 'Analisar a qualidade do alimento',
                'grupo' => 'E'],
            [
                'alternativa' => 'B', 'texto_alternativa' => 'Desenvolver embalagens que não poluam o meio ambiente',
                'grupo' => 'E'],
            [
                'alternativa' => 'A', 'texto_alternativa' => 'Estudar produtos alimentícios existentes para melhorá-los',
                'grupo' => 'E'],
            [
                'alternativa' => 'B', 'texto_alternativa' => 'Conhecer quais bactérias causam intoxicação alimentar',
                'grupo' => 'E'],
            [
                'alternativa' => 'A', 'texto_alternativa' => 'Saber como é o processo de fermentação',
                'grupo' => 'E'],
            [
                'alternativa' => 'B', 'texto_alternativa' => 'Estudar como deixar um alimento industrializado mais saudável em sua composição',
                'grupo' => 'E'],
            [
                'alternativa' => 'A', 'texto_alternativa' => 'Saber como uma indústria produz um alimento de forma segura e higiênica',
                'grupo' => 'E'],
            [
                'alternativa' => 'B', 'texto_alternativa' => 'Projetar equipamentos para uma indústria de alimentos',
                'grupo' => 'E'],
           
        ]);
    }
}
