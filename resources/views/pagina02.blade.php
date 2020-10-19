@extends('layout.ejemploLayout')

@section('titulo', 'Pagina 02 del proyecto')



@section('barralateral')
@parent
<p>Esto es la página 02</p>

@endsection



@section('contenido')

<h3>Esto esta en el body de la página 02</h3>

<a href="{{ url('/') }}" class="btn btn-xs btn-info pull-left">Página 01</a>

@endsection