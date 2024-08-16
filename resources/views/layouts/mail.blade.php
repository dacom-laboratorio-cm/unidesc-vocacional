
<!--

Observação:

        Essa layouts está  usando style em linha devido ser especial para envio de e-mail,
        sabemos que em boas práticas o correto é usar o style externo.


 -->


<!DOCTYPE html>
<html lang="pt-br">
<header>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</header>

<body style="margin: 0;font-weight: 400;color: #212529;text-align: left; background-color: #fff;">
    <div style="max-width: 500px;padding: 15px;margin: auto;">

        <div style="display: -ms-flexbox;display: flex;-ms-flex-wrap: wrap;margin: -15px;">
            <div style="width:600px;
                            display: -ms-flexbox;
                            display: flex;
                            -ms-flex-direction: column;
                            flex-direction: column;
                            min-width: 0;
                            background-color: #fff;
                            background-clip: border-box;
                            border: 1px solid rgba(0,0,0,.125);
                            border-radius: .25rem;">
                <div>
                    <img src="https://i.imgur.com/OZmurkT.png" style="width: 100%;" alt="Teste Vocacional">
                    <div style="padding: 1.25rem;">
                        <b style="margin-bottom: .75rem;">Teste Vocacional | UTFPR</b>
                        <p class="card-text"> Olá {{ucwords(strtolower($data->nome))}}, muito obrigado por ter participado do nosso teste vocacional.</p>

                        <!-- Informação do candidato -->

                        <div >
                            <b>Suas informações:</b>
                            <div><br>
                                <b>Nome: </b><i>{{ucwords(strtolower($data->nome))}}</i><br>
                                <b>Telefone: </b><i>{{$data->telefone}}</i><br>
                                <b>Cidade: </b><i>{{$data->cidade->nm_cidade}} - {{$data->cidade->estado->sg_estado}}</i><br>
                            </div>
                        </div>

                        <!-- Resultado do candidato -->

                        <div><br>
                            <b>Resultado:</b>
                            <ul style="padding-left: 0;margin: 2px 0;">
                                <li style="
                                        display: inline-block;
                                        padding: 3px;
                                        font-size: 75%;
                                        font-weight: 700;
                                        text-align: center;
                                        white-space: nowrap;
                                        vertical-align: baseline;
                                        border-radius: .25rem;
                                        transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
                                        color: #fff;
                                        background-color: #3366cd;
                                        margin: 3px;">Grupo A
                                </li>{{$data->resultado->GPA}} Pontos |

                                <li style="
                                            display: inline-block;
                                            padding: 3px;
                                            font-size: 75%;
                                            font-weight: 700;
                                            text-align: center;
                                            white-space: nowrap;
                                            vertical-align: baseline;
                                            border-radius: .25rem;
                                            transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
                                            color: #fff;
                                            background-color: #FF3636;
                                            margin: 3px;">Grupo B
                                </li>{{$data->resultado->GPB}} Pontos <br>

                                <li style="
                                            display: inline-block;
                                            padding: 3px;
                                            font-size: 75%;
                                            font-weight: 700;
                                            text-align: center;
                                            white-space: nowrap;
                                            vertical-align: baseline;
                                            border-radius: .25rem;
                                            transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
                                            color: #fff;
                                            background-color: #FFB236;
                                            margin: 3px;">Grupo C
                                </li>{{$data->resultado->GPC}} Pontos |

                                <li style="
                                            display: inline-block;
                                            padding: 3px;
                                            font-size: 75%;
                                            font-weight: 700;
                                            text-align: center;
                                            white-space: nowrap;
                                            vertical-align: baseline;
                                            border-radius: .25rem;
                                            transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
                                            color: #fff;
                                            background-color: #18ce0f;
                                            margin: 3px;">Grupo D
                                </li>{{$data->resultado->GPD}} Pontos |

                                <li style="
                                            display: inline-block;
                                            padding: 3px;
                                            font-size: 75%;
                                            font-weight: 700;
                                            text-align: center;
                                            white-space: nowrap;
                                            vertical-align: baseline;
                                            border-radius: .25rem;
                                            transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
                                            color: #fff;
                                            background-color: #9d5399;
                                            margin: 3px;">Grupo E
                                </li>{{$data->resultado->GPE}} Pontos <br>
                            </ul>
                            <!-- Fim Resultado do candidato -->

                            <!-- Nivel de interesse do candidato -->

                            <div>

                                <b>Nivel de Interesse:</b><br><br>
                                <b>0 A 3: </b><i>Pontos – Pequeno</i><br>
                                <b>4 A 6: </b><i>Pontos – Moderado</i><br>
                                <b>7 A 9: </b><i>Pontos – Grande</i><br>
                                <b>10 A 12: </b><i>Pontos – Muito Forte</i>

                            </div>
                            <!-- Fim Nivel de interesse do candidato -->

                            <!-- Detalhes dos Grupos do candidato -->

                            <div>
                                <p style="/*box-shadow: 0 1px 9px -3px */ border: 1px solid rgba(0,0,0,.125);
                                 font-weight: 400;text-align: justify ;padding: 15px;background-color: #fff">

                                    <b>Grupo A:</b>
                                    Tendências ao grupo da tecnologia: uma pessoa que ama desenvolver
                                    e descobrir a solução dos problemas. Na UTFPR-CM, na área de tecnologia, possuímos
                                    os cursos de Engenharia Eletrônica e Ciência da Computação.

                                </p>
                                <p style="/*box-shadow: 0 1px 9px -3px */ border: 1px solid rgba(0,0,0,.125);
                                font-weight: 400;text-align: justify ;padding: 15px;background-color: #fff">

                                    <b>Grupo B:</b>
                                    Tendências ao grupo de construção e infraestrutura: uma pessoa que ama 
                                    planejar projetos e construí-los. Na UTFPR-CM, na área de construção, possuímos o curso de 
                                    Engenharia Civil.
                                </p>
                                <p style="/*box-shadow: 0 1px 9px -3px */ border: 1px solid rgba(0,0,0,.125);font-weight: 400;text-align: justify ;padding: 15px;background-color: #fff">

                                    <b>Grupo C:</b>
                                    Tendências ao grupo de meio ambiente e sustentabilidade: uma pessoa que ama 
                                    criar soluções para os problemas atuais do mundo: eficiência energética, reciclagem... Na 
                                    UTFPR-CM, possuímos o curso de Engenharia Ambiental e Sanitária.
                                </p>
                                <p style="/*box-shadow: 0 1px 9px -3px */ border: 1px solid rgba(0,0,0,.125);font-weight: 400;text-align: justify ;padding: 15px;background-color: #fff">
                                    <b>Grupo D:</b>
                                    Tendências ao grupo de ciências químicas: uma pessoa que ama experimentar com 
                                    químicos, desenvolver compostos e novas fórmulas. Na UTFPR-CM, possuímos os cursos de Engenharia 
                                    Química e Licenciatura química.
                                </p>
                                <p style="/*box-shadow: 0 1px 9px -3px */ border: 1px solid rgba(0,0,0,.125);
                                font-weight: 400;text-align: justify ;padding: 15px;background-color: #fff">

                                    <b>Grupo E:</b>
                                    Tendências ao grupo de alimentos e nutrição: uma pessoa que ama estudar sobre a nutrição 
                                    dos alimentos e seus componentes. Na UTFPR-CM, possuímos os cursos de Engenharia de alimentos e
                                    Tecnologia de alimentos.

                                </p>
                            </div>
                            <!-- Fim  Detalhes dos Grupos do candidato -->

                            <!-- Rodapé -->

                            <div style="text-align: center!important;
                                background-color: #fff;
                                border: 1px solid rgba(0,0,0,.125);
                                border-radius: .25rem;">
                                <div style="background-color: darkgray; padding: 5px 0;">
                                    Telefone:(44) 3518-1400 <br/>
                                    Via Rosalina Maria dos Santos, 1233 - Vila Carolo,
                                    Campo Mourão - PR, 87301-899  <br/>
                                    <a href="https://www.utfpr.edu.br/campus/campomourao/sobre" target="_blank" >https://www.utfpr.edu.br/campus/campomourao/sobre</a>
                                </div>
                            </div>

                            <!-- Fim Rodapé -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
