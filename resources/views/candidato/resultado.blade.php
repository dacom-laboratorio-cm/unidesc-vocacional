@extends('layouts.template_teste')

@section('conteudo')
    <header class="alinhar-bg-questoes">
        <img src="{{asset("/assets/template/img/meus/capa-final.png")}}" alt="capa" style="width: 1600px"
             draggable="false">
    </header>


    <div class="wrapper">
        <div class="section-form">
            <div class="container">

                <div class="row alinhar-mid-teste">
                    {{-- GRUPO A --}}
                    <div class="dropdown ml-2 mr-2">
                        <button class="btn btn-purple dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            <span class="font-weight-bold"><i class="fas fa-network-wired"></i> Grupo A</span>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="">
                            <div class="container" style="width: 20rem;">
                                <div class="alinhar-mid-teste">
                                    <img class="card-img-top justify-content-center" draggable="false"
                                         src="{{asset('/assets/template/img/resultado-images-meu/tecnologia.png')}}"
                                         alt="Card image cap" style="width: 200px">
                                </div>

                                <div class="card-body">
                                    <p class="text-justify  font-weight-normal">
                                        Tendências ao <span class="text-info">grupo da tecnologia</span>: uma pessoa que ama desenvolver
                                        e descobrir a solução dos problemas. Na UTFPR-CM, na área de tecnologia, possuímos
                                        os cursos de <span class="text-info">Engenharia Eletrônica e Ciência da Computação.</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- GRUPO B --}}
                    <div class="dropdown ml-2 mr-2">
                        <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            <span class="font-weight-bold"><i
                                    class="fas fa-briefcase-medical"></i> Grupo B</span>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="">
                            <div class="container" style="width: 20rem;">
                                <div class="alinhar-mid-teste">
                                    <img class="card-img-top justify-content-center" draggable="false"
                                         src="{{asset('/assets/template/img/resultado-images-meu/construcao-e-infraestrutura.png')}}"
                                         alt="Card image cap" style="width: 200px">
                                </div>

                                <div class="card-body">
                                    <p class="text-justify font-weight-normal">
                                    Tendências ao grupo de <span class="text-info">construção e infraestrutura</span>: uma pessoa que ama 
                                    planejar projetos e construí-los. Na UTFPR-CM, na área de construção, possuímos o curso de 
                                    <span class="text-info">Engenharia Civil.</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- GRUPO C --}}
                    <div class="dropdown ml-2 mr-2">
                        <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            <span class="font-weight-bold"><i class="fas fa-gavel"></i> Grupo C</span>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="">
                            <div class="container" style="width: 20rem;">
                                <div class="alinhar-mid-teste">
                                    <img class="card-img-top justify-content-center" draggable="false"
                                         src="{{asset('/assets/template/img/resultado-images-meu/meio-ambiente.png')}}"
                                         alt="Card image cap" style="width: 200px">
                                </div>

                                <div class="card-body">
                                    <p class="text-justify font-weight-normal">
                                        Tendências ao grupo de <span class="text-info">meio ambiente e sustentabilidade</span>: uma pessoa que ama 
                                        criar soluções para os problemas atuais do mundo: eficiência energética, reciclagem... Na 
                                        UTFPR-CM, possuímos o curso de <span class="text-info">Engenharia Ambiental e Sanitária.</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- GRUPO D --}}
                    <div class="dropdown ml-2 mr-2">
                        <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            <span class="font-weight-bold"><i class="fas fa-newspaper"></i> Grupo D</span>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="">
                            <div class="container" style="width: 20rem;">
                                <div class="alinhar-mid-teste">
                                    <img class="card-img-top justify-content-center" draggable="false"
                                         src="{{asset('/assets/template/img/resultado-images-meu/ciencias-quimicas.png')}}"
                                         alt="Card image cap" style="width: 200px">
                                </div>

                                <div class="card-body">
                                    <p class="text-justify font-weight-normal">
                                        Tendências ao grupo de <span class="text-info">ciências químicas</span>: uma pessoa que ama experimentar com 
                                        químicos, desenvolver compostos e novas fórmulas. Na UTFPR-CM, possuímos os cursos de
                                        <span class="text-info">Engenharia Química e Licenciatura Química.</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- GRUPO E --}}
                    <div class="dropdown ml-2 mr-2">
                        <button class="btn btn-purple-white dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            <span class="font-weight-bold"><i class="fas fa-film"></i> Grupo E</span>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="">
                            <div class="container" style="width: 20rem;">
                                <div class="alinhar-mid-teste">
                                    <img class="card-img-top justify-content-center" draggable="false"
                                         src="{{asset('/assets/template/img/resultado-images-meu/alimentos-e-nutricao.png')}}"
                                         alt="Card image cap" style="width: 200px">
                                </div>

                                <div class="card-body">
                                    <p class="text-justify font-weight-normal">
                                        Tendências ao grupo de <span class="text-info">alimentos e nutrição</span>: uma pessoa que ama estudar sobre a nutrição 
                                        dos alimentos e seus componentes. Na UTFPR-CM, possuímos os cursos de
                                        <span class="text-info">Engenharia de Alimentos e Tecnologia de Alimentos.</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <hr>

                <div class="row">

                    <div class="col-sm-6 mb-3">
                        <canvas id="resultadoGrafico"></canvas>
                    </div>

                    <div class="col-sm-6">
                        <span class="title-resultado-sobre">Resultado Final</span>
                        <p class="text-justify font-weight-normal sobre-teste-desc">
                            É hora de descobrir as profissões para as quais você demonstra certa inclinação.
                            Veja onde você fez mais pontos e, usando como critério a tabela abaixo, confira a sua
                            vocação.
                        </p>
                        <hr>
                        <strong>
                        <i>Obrigado <span class="badge badge-success">{{$resultado_cand->nome}}</span> pela sua participação!</i>
                        </strong>
                    </div>
                </div>

                <div class="row shadow-sm p-3 border border-success">
                    <span class="font-weight-bold">Nivel de Interesse:</span>
                    <div class="col">
                        <span class="badge badge-default">0 a 3 pontos – pequeno</span>
                    </div>
                    <div class="col">
                        <span class="badge badge-icon text-dark">4 a 6 pontos – moderado</span>
                    </div>
                    <div class="col">
                        <span class="badge badge-primary">7 a 9 pontos – grande</span>
                    </div>
                    <div class="col">
                        <span class="badge badge-info">10 a 12 pontos – muito forte</span>
                    </div>
                </div>

                <div class="alinhar-mid-teste">
                    <a href="{{route('home')}}">
                        <button class="btn btn-success"><strong>Finalizar Teste !</strong></button>
                    </a>
                </div>


            </div>
        </div>
    </div>

    @component('components.footer')
    @endcomponent
@endsection

@section('scripts_charts')
    <script type="text/javascript">

        var ctx = document.getElementById('resultadoGrafico').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ['GRUPO A', 'GRUPO B', 'GRUPO C', 'GRUPO D', 'GRUPO E'],
                datasets: [{
                    data: [
                        [{{$resultado_cand->resultado->GPA}}],
                        [{{$resultado_cand->resultado->GPB}}],
                        [{{$resultado_cand->resultado->GPC}}],
                        [{{$resultado_cand->resultado->GPD}}],
                        [{{$resultado_cand->resultado->GPE}}],
                    ],
                    backgroundColor: [
                        'rgba(75, 120, 211, 1)',
                        'rgba(245, 82, 85, 1)',
                        'rgba(255, 178, 55, 1)',
                        'rgba(114, 224, 19, 1)',
                        'rgba(172, 98, 168, 1)',
                    ],
                    borderColor: [
                        'rgba(255,255,255)',
                        'rgba(255,255,255)',
                        'rgba(255,255,255)',
                        'rgba(255,255,255)',
                        'rgba(255,255,255)',
                    ],
                    borderWidth: 4
                }]
            },
        });

    </script>
@endsection
