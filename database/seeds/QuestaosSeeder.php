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
                'altenativa' => 'A', 'texto_alternativa' => 'Estudar sobre inteligência artificial',
                'grupo' => 'A'],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'Saber como um celular funciona',
                'grupo' => 'A'],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'Desenvolver videogames',
                'grupo' => 'A'],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'Estudar sobre circuitos eletrônicos',
                'grupo' => 'A'],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'Desenvolver um site e aplicativos',
                'grupo' => 'A'],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'Entender sobre Internet das Coisas',
                'grupo' => 'A'],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'Entender sobre segurança digital',
                'grupo' => 'A'],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'Entender como é feito uma placa eletrônica',
                'grupo' => 'A'],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'Desenvolver software para empresas',
                'grupo' => 'A'],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'Saber como projetar um processador',
                'grupo' => 'A'],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'Estudar sobre algoritmos',
                'grupo' => 'A'],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'Saber prototipagem eletrônica',
                'grupo' => 'A'],
            // Grupo B
            [
                'altenativa' => 'A', 'texto_alternativa' => 'Construir barragens',
                'grupo' => 'B'],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'Planejar a planta de uma  casa',
                'grupo' => 'B'],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'Planejar a construção de uma ponte',
                'grupo' => 'B'],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'Planejar o sistema de esgoto de uma cidade',
                'grupo' => 'B'],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'Saber selecionar e testar materiais de construção',
                'grupo' => 'B'],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'Restaurar um edifício histórico',
                'grupo' => 'B'],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'Estudar o comportamento do solo e das rochas do local de uma construção',
                'grupo' => 'B'],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'Trabalhar em obras de urbanização',
                'grupo' => 'B'],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'Planejar a construção de apartamentos ',
                'grupo' => 'B'],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'Construir  estradas e rodovias',
                'grupo' => 'B'],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'Construir uma escola',
                'grupo' => 'B'],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'Entender sobre infraestrutura',
                'grupo' => 'B'],
            // Grupo C
            [
                'altenativa' => 'A', 'texto_alternativa' => 'Estudar sobre meio ambiente',
                'grupo' => 'C'],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'Estudar sobre energias renováveis',
                'grupo' => 'C'],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'Desenvolver soluções de reciclagem',
                'grupo' => 'C'],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'Desenvolver soluções para o tratamento de água',
                'grupo' => 'C'],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'Monitorar a qualidade do ar, água e solo',
                'grupo' => 'C'],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'Planejar o tratamento de um rio',
                'grupo' => 'C'],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'Planejar o desenvolvimento sustentável de uma região',
                'grupo' => 'C'],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'Trabalhar em projetos de preservação ambiental ',
                'grupo' => 'C'],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'Monitorar mudanças climáticas',
                'grupo' => 'C'],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'Planejar projetos de reflorestamento',
                'grupo' => 'C'],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'Fazer estudos sobre impacto ambiental',
                'grupo' => 'C'],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'Estudar sobre como diminuir a poluição do ar',
                'grupo' => 'C'],
            // Grupo D
            [
                'altenativa' => 'A', 'texto_alternativa' => 'Desenvolver produtos de limpeza',
                'grupo' => 'D'],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'Trabalhar em  indústrias químicas',
                'grupo' => 'D'],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'Desenvolver produtos para a indústria farmacêutica',
                'grupo' => 'D'],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'Estudar química orgânica',
                'grupo' => 'D'],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'Trabalhar em laboratórios de química ',
                'grupo' => 'D'],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'Saber como acontecem as reações químicas',
                'grupo' => 'D'],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'Desenvolver práticas para garantir a segurança em processos químicos industriais',
                'grupo' => 'D'],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'Trabalhar em grandes empresas de petróleo',
                'grupo' => 'D'],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'Saber como retirar a matéria-prima do meio ambiente e evitar danos ambientais',
                'grupo' => 'D'],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'Estudar sobre energia nuclear',
                'grupo' => 'D'],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'Ensinar sobre química',
                'grupo' => 'D'],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'Desenvolver equipamentos para usos em processos industriais químicos',
                'grupo' => 'D'],
            // Grupo E
            [
                'altenativa' => 'A', 'texto_alternativa' => 'Criar novos produtos alimentícios',
                'grupo' => 'E'],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'Desenvolver um novo sabor para um alimento industrializado',
                'grupo' => 'E'],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'Coordenar a  produção em fábricas de alimentos',
                'grupo' => 'E'],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'Criar embalagens para alimentos',
                'grupo' => 'E'],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'Analisar a qualidade do alimento',
                'grupo' => 'E'],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'Desenvolver embalagens que não poluam o meio ambiente',
                'grupo' => 'E'],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'Estudar produtos alimentícios existentes para melhorá-los',
                'grupo' => 'E'],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'Conhecer quais bactérias causam intoxicação alimentar',
                'grupo' => 'E'],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'Saber como é o processo de fermentação',
                'grupo' => 'E'],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'Estudar como deixar um alimento industrializado mais saudável em sua composição',
                'grupo' => 'E'],
            [
                'altenativa' => 'A', 'texto_alternativa' => 'Saber como uma indústria produz um alimento de forma segura e higiênica',
                'grupo' => 'E'],
            [
                'altenativa' => 'B', 'texto_alternativa' => 'Projetar equipamentos para uma indústria de alimentos',
                'grupo' => 'E'],
           
        ]);
    }
}
