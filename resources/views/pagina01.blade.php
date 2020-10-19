@extends('layout.ejemploLayout')

@section('titulo', 'Pagina 01 del proyecto')

@section('barralateral')

<p>Esto es la barra lateral</p>

@endsection

@section('contenido')

<p>Esto esta en el body</p>

<a href="{{ url('pagina02') }}" class="btn btn-xs btn-info pull-right">Página 02</a>
@endsection