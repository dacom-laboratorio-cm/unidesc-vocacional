<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="description" content="Teste Vocacional da UNIDESC, adaptado para a UTFPR">
    <meta name="keywords" content="Teste Vocacional, Unidesc, UTFPR, Sistemas, TI, Engenharia de Software, PHP, Laravel">
    <meta name="author" content="Gabriel Roque & Jadilson Guedes">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
          name='viewport'/>
    {{-- Cor da aba - MOBILE --}}
    <meta name="theme-color" content="#0e7494">
    <meta name="apple-mobile-web-app-status-bar-style" content="#0e7494">

    <title>Teste Vocacional</title>

    {{-- FONTS --}}
    <link rel="stylesheet" href="{{asset('assets/fonts/fonts.css')}}">
    {{-- ICONS Font Awesonme --}}
    <link rel="stylesheet" href="{{asset('assets/icons/css/all.min.css')}}">
    {{-- CSS Files Custom--}}
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
    {{-- CSS Files Template--}}
    <link href="{{asset('assets/template/css/bootstrap.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('assets/template/css/now-ui-kit.css?v=1.2.0')}}" rel="stylesheet"/>
    {{--Jquery--}}
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    {{--Wizard--}}
    <link href="{{asset('assets/wizard/css/smart_wizard.css')}}" rel="stylesheet"/>
    <link href="{{asset('assets/wizard/css/smart_wizard_theme_dots.css')}}" rel="stylesheet" type="text/css"/>
    {{-- Charts --}}
    <script type="text/javascript" src="{{asset('assets/js/charts/Chart.js')}}"></script>

    {{-- Datatable --}}
    @hasSection('scripts_dashboard')
        <link rel="stylesheet" href="{{asset('assets/datatable/css/jquery.dataTables.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/datatable/css/buttons.dataTables.min.css')}}">
    @endif
</head>
