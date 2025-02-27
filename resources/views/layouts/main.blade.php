<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>@yield('title')</title>
    <script src={{{URL::asset("/js/consumoapi.js")}}}></script>
    
    
   

    
    <!-- /	Link dos Css do Bootstrap -->
    <link href={{URL::asset("vendor/bootstrap/css/bootstrap.min.css")}} rel="stylesheet">
    <link href={{URL::asset("vendor/bootstrap-icons/bootstrap-icons.css")}} rel="stylesheet">
    <link href={{URL::asset("vendor/boxicons/css/boxicons.min.css")}} rel="stylesheet">
    <link href={{URL::asset("vendor/quill/quill.snow.css")}} rel="stylesheet">
    <link href={{URL::asset("vendor/quill/quill.bubble.css")}} rel="stylesheet">
    <link href={{URL::asset("vendor/remixicon/remixicon.css")}} rel="stylesheet">
    
    
    <!-- /	Link do Css main do projecto -->
    <link href={{{URL::asset("css/apitabelainscricao.css")}}} rel="stylesheet">
    <link href={{{URL::asset("css/estilo.css")}}} rel="stylesheet">
    <link href={{{URL::asset("css/tudo.css")}}} rel="stylesheet">
    <link href={{{URL::asset("css/dinamico.css")}}} rel="stylesheet">
    <link href={{{URL::asset("css/perfil.css")}}} rel="stylesheet">
    <link href={{{URL::asset("css/calendario.css")}}} rel="stylesheet">
    <link href={{{URL::asset("css/ficha-biografica-doc.css")}}} rel="stylesheet">
    <link href={{{URL::asset("css/fonts/fontawesome-all.min.css")}}} rel="stylesheet">
    <link href={{{URL::asset("tooltipster/dist/css/tooltipster.bundle.min.css")}}} rel="stylesheet">

    
    
    <!-- /	Link do js mim do projecto -->
    <script src={{{URL::asset("js/jquery-3.6.4.min.js")}}}></script>
    <script src={{{URL::asset("js/chart.js")}}}></script>
    <script src={{URL::asset("node_modules/chart.js/dist/chart.js")}}></script>

    

  


</head>
<body>

    @include('layouts.menu')

    @include('layouts.sidebar')
    @php

    @endphp

    @yield('conteudo')

    @include('layouts.footer')

    <!-- /	Link dos js do bootstrap-->
  <script src={{{URL::asset("js/axios.min.js")}}}></script>
  <script src={{{URL::asset("js/APIconsumo.js")}}}></script>
  <script src={{{URL::asset("vendor/apexcharts/apexcharts.min.js")}}}></script>
  <script src={{{URL::asset("vendor/bootstrap/js/bootstrap.bundle.min.js")}}}></script>
  <script src={{{URL::asset("vendor/chart.js/chart.umd.js")}}}></script>
  <script src={{{URL::asset("vendor/echarts/echarts.min.js")}}}></script>
  <script src={{{URL::asset("vendor/quill/quill.min.js")}}}></script>
  <script src={{{URL::asset("vendor/tinymce/tinymce.min.js")}}}></script>

  <!-- /	Link do js main do projeto -->
  <script src={{{URL::asset("Datatables/datatables.min.js")}}}></script>
  <script src={{{URL::asset("js/script.js")}}}></script>
  <script src={{{URL::asset("js/form.js")}}}></script>
  <script src={{{URL::asset("js/select.js")}}}></script>
  <script src={{{URL::asset("js/form.js")}}}></script>
  <script src={{{URL::asset("js/clone-contato.js")}}}></script>
  <script src={{{URL::asset("js/dinamico.js")}}}></script>
  <script src={{{URL::asset("js/paineis/disciplina/disciplina.js")}}}></script>
  <script src={{{URL::asset("js/paineis/horario/horario.js")}}}></script>
  <script src={{{URL::asset("tooltipster/dist/js/tooltipster.bundle.min.js")}}}></script>
  <script src={{{URL::asset("js/tab.js")}}}></script>
 
  
</body>
</html>