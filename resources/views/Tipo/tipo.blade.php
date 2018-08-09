@extends('layout.admin')

@section('content')
	<div class="title m-b-md">
    	Tipo             
    </div>

   	<table border="1">
   		<thead>
   			<td>id_cajap_tipo</td>
   			<td>id_boveda</td>
   			<td>desc_cajap</td>
   			<td>Modificar</td>
   			<td>Ver</td>
   			<td>Eliminar</td>
   		</thead>
    @foreach($Adm as $adm)
   		<tr>
	   		<td>{!! $adm->id_cajap_tipo !!}</td>
	   		<td>{!! $adm->id_boveda !!}</td>
	   		<td>{!! $adm->desc_cajap !!}</td>
	   		<td><a href="{{ route ('Tipo.edit', $adm->id_cajap_tipo) }}">Modificar</a></td>
	   		<td><a href="{{ route ('Tipo.show', $adm->id_cajap_tipo) }}">Ver</a></td>
	   		<td>
	   			<form method="POST" action="{{ route('Tipo.destroy', $adm->id_cajap_tipo) }}">
					@csrf
					{!! method_field('DELETE') !!}
	   				<button>Eliminar</button></form>
	   		</td>
   		</tr>
   	@endforeach
   	</table>
    
	<h2><a href="{{ route ('Tipo.create') }}">Insertar</a></h2>
	{{-- <h2><a href="{{ route ('Tipo.edit', ) }}">Modificar</a></h2> --}}
	{{-- <h2><a href="{{ route ('Tipo.show') }}">Ver</a></h2> --}}
	
@stop