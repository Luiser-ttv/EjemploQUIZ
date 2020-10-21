@extends('layout.ejemploLayout')

@section('titulo', 'Pagina 01 del proyecto')

@section('barralateral')

<p>Esto es la barra lateral</p>

@endsection

@section('contenido')

<p>Esto esta en el body</p>

<a href="{{ url('pagina02/Historia') }}" class="btn btn-xs btn-info pull-right">HISTORIA</a>
<a href="{{ url('pagina02/Economia') }}" class="btn btn-xs btn-info pull-right">ECONOMIA</a>
<a href="{{ url('pagina02/Inglés') }}" class="btn btn-xs btn-info pull-right">INGLÉS</a>
@endsection