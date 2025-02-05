@extends('layouts.base')
@section('title', 'Listado de Condicionamientos')
@section('content')
<div class="container">

	<h1 class="mt-3 mb-3">Condicionamientos de matricula</h1>
	@if(session('status'))
		<div class="alert alert-success">
			{{session('status')}}
		</div>
	@endif
	<table class="table table-striped">
		<tr>
			<th scope="col">Descripción</th>
			<th scope="col">Fecha</th>
			<th scope="col">Fecha Máxima</th>
			<th scope="col">Opciones</th>
		</tr>
		@foreach($condicionamientos as $condicionamientos)
				<tr>
					<td>{{$condicionamientos->SC_CondicionamientoMatricula_Descripcion}}</td>
					<td>{{$condicionamientos->SC_CondicionamientoMatricula_Fecha}}</td>
					
					<td>{{$condicionamientos->SC_CondicionamientoMatricula_FechaMaxima}}</td>
					
					<td scope="col">
						<a href="/condicionamientos/{{$condicionamientos->SC_CondicionamientoMatricula_PK_ID}}"class="btn btn-outline-default p-0"><i class="fas fa-eye"></i></a>
					</td>
					</tr>
					@endforeach
				</table>
</div>
@endsection 
