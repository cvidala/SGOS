@extends('layout.admin')

@section('content')
	<div class="title m-b-md">
    	Canje destino                
    </div>

   	<table border="1">
   		<thead>
   			<td>id_canje_destino</td>
   			<td>desc_canje_destino</td>
   			<td>Modificar</td>
   			<td>Ver</td>
   			<td>Eliminar</td>
   		</thead>
    @foreach($Adm as $adm)
   		<tr>
	   		<td>{!! $adm->id_canje_destino !!}</td>
	   		<td>{!! $adm->desc_canje_destino !!}</td>
	   		<td><a href="{{ route ('CanjeDestino.edit', $adm->id_canje_destino) }}">Modificar</a></td>
	   		<td><a href="{{ route ('CanjeDestino.show', $adm->id_canje_destino) }}">Ver</a></td>
	   		<td>
	   			<form method="POST" action="{{ route('CanjeDestino.destroy', $adm->id_canje_destino) }}">
					@csrf
					{!! method_field('DELETE') !!}
	   				<button>Eliminar</button></form>
	   		</td>
   		</tr>
   	@endforeach
   	</table>
    
	<h2><a href="{{ route ('CanjeDestino.create') }}">Insertar</a></h2>
	{{-- <h2><a href="{{ route ('CanjeDestino.edit', ) }}">Modificar</a></h2> --}}
	{{-- <h2><a href="{{ route ('CanjeDestino.show') }}">Ver</a></h2> --}}
	
@stop