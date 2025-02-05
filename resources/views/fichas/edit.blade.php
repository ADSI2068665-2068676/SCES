@extends('layouts.base')
@section('title', 'Modificar Ficha')
@section('content')
<head>
	<link rel="stylesheet" href="{{ asset('estilos/estilos.css') }}">
</head>

<div class="container">
	<h1>Modificar Ficha</h1>
	<form action="/fichas/{{ $ficha->SC_Ficha_PK_ID }}" method="post" enctype="multipart/form-data" id="formulario">
		@method('PUT')
		@csrf

	  <div class="form-group">
	   <span class="input-group-text" for="SC_Ficha_NombreProgramaFormacion">Nombre</span>
	    <input type="text" class="form-control" id="SC_Ficha_NombreProgramaFormacion" name="SC_Ficha_NombreProgramaFormacion" value="{{ $ficha->SC_Ficha_NombreProgramaFormacion }}">
	    @error('SC_Ficha_NombreProgramaFormacion')
	    	<small>{{ $message }}</small>
	    @enderror
	  </div>
	  <div class="form-group">
	   <span class="input-group-text"for="SC_Ficha_NumeroFicha">Número del programa de formación</span>
	    <input type="number" class="form-control" id="SC_Ficha_NumeroFicha" name="SC_Ficha_NumeroFicha" value="{{ $ficha->SC_Ficha_NumeroFicha}}">
	    @error('SC_Ficha_NumeroFicha')
	    	<small>{{ $message }}</small>
	    @enderror
	  </div>
      <div class="form-group">
	    <span class="input-group-text" for="SC_Ficha_FechaInicio">Fecha de Inicio</span>
	    <input type="date" class="form-control" id="SC_Ficha_FechaInicio" name="SC_Ficha_FechaInicio" value="{{ $ficha->SC_Ficha_FechaInicio }}">
	    @error('SC_Ficha_FechaInicio')
	    	<small>{{ $message }}</small>
	    @enderror
	  </div>
	  <div class="form-group">
	   <span class="input-group-text" for="SC_Ficha_FechaFin">Fecha de Finalización</span>
	    <input type="date" class="form-control" id="SC_Ficha_FechaFin" name="SC_Ficha_FechaFin" value="{{ $ficha->SC_Ficha_FechaFin }}">
	    @error('SC_Ficha_FechaFin')
	    	<small>{{ $message }}</small>
	    @enderror
	  </div>
	  <button type="submit" class="btn btn-success" id="btn">Actualizar Ficha</button>
	</form>
</div>
@endsection