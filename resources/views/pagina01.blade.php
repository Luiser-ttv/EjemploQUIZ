@extends('layout.ejemploLayout')

@section('titulo', 'Pagina 01 del proyecto')

@section('barralateral')

<p>Esto es la barra lateral</p>

@endsection

@section('contenido')

<p>Esto esta en el body</p>

<a href="{{ url('pregunta', ['Historia']) }}" class="btn btn-xs btn-info pull-right">HISTORIA</a>
<a href="{{ url('pregunta', ['Economia']) }}" class="btn btn-xs btn-info pull-right">ECONOMIA</a>
<a href="{{ url('pregunta', ['Ingles']) }}" class="btn btn-xs btn-info pull-right">INGLES</a>
<a href="{{ url('api/preguntas', ['Historia']) }}" class="btn btn-xs btn-info pull-right">HISTORIA</a>

@endsection