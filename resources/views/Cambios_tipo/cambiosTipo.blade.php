@extends('layout.admin')

@section('content')
	<div class="title m-b-md">
    	Cambios Tipo                
    </div>

   	<table border="1">
   		<thead>
   			<td>id_cambio_tipo</td>
   			<td>id_cajap_tipo</td>
   			<td>desc_cambio_tipo</td>
   			<td>Modificar</td>
   			<td>Ver</td>
   			<td>Eliminar</td>
   		</thead>
    @foreach($Adm as $adm)
   		<tr>
	   		<td>{!! $adm->id_cambio_tipo !!}</td>
	   		<td>{!! $adm->id_cajap_tipo !!}</td>
	   		<td>{!! $adm->desc_cambio_tipo !!}</td>
	   		<td><a href="{{ route ('CambiosTipo.edit', $adm->id_cambio_tipo) }}">Modificar</a></td>
	   		<td><a href="{{ route ('CambiosTipo.show', $adm->id_cambio_tipo) }}">Ver</a></td>
	   		<td>
	   			<form method="POST" action="{{ route('CambiosTipo.destroy', $adm->id_cambio_tipo) }}">
					@csrf
					{!! method_field('DELETE') !!}
	   				<button>Eliminar</button></form>
	   		</td>
   		</tr>
   	@endforeach
   	</table>
    
	<h2><a href="{{ route ('CambiosTipo.create') }}">Insertar</a></h2>

	
@stop