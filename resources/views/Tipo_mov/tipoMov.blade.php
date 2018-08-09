@extends('layout.admin')

@section('content')
	<div class="title m-b-md">
    	Tipo Movimiento                
    </div>

   	<table border="1">
   		<thead>
   			<td>id_tipo_mov</td>
   			<td>id_cajap_tipo</td>
   			<td>desc_cajap_mov</td>
   			<td>Modificar</td>
   			<td>Ver</td>
   			<td>Eliminar</td>
   		</thead>
    @foreach($Adm as $adm)
   		<tr>
	   		<td>{!! $adm->id_tipo_mov !!}</td>
	   		<td>{!! $adm->id_cajap_tipo !!}</td>
	   		<td>{!! $adm->desc_cajap_mov !!}</td>
	   		<td><a href="{{ route ('TipoMov.edit', $adm->id_tipo_mov) }}">Modificar</a></td>
	   		<td><a href="{{ route ('TipoMov.show', $adm->id_tipo_mov) }}">Ver</a></td>
	   		<td>
	   			<form method="POST" action="{{ route('TipoMov.destroy', $adm->id_tipo_mov) }}">
					@csrf
					{!! method_field('DELETE') !!}
	   				<button>Eliminar</button></form>
	   		</td>
   		</tr>
   	@endforeach
   	</table>
    
	<h2><a href="{{ route ('TipoMov.create') }}">Insertar</a></h2>
	{{-- <h2><a href="{{ route ('TipoMov.edit', ) }}">Modificar</a></h2> --}}
	{{-- <h2><a href="{{ route ('TipoMov.show') }}">Ver</a></h2> --}}
	
@stop