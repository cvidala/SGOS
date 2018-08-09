@extends('layout.admin')

@section('content')
	<div class="title m-b-md">
    	Formas Pago                
    </div>

   	<table border="1">
   		<thead>
   			<td>id_cajap</td>
   			<td>id_cajap_tipo</td>
   			<td>desc_cajap</td>
   			<td>Modificar</td>
   			<td>Ver</td>
   			<td>Eliminar</td>
   		</thead>
    @foreach($Adm as $adm)
   		<tr>
	   		<td>{!! $adm->id_cajap !!}</td>
	   		<td>{!! $adm->id_cajap_tipo !!}</td>
	   		<td>{!! $adm->desc_cajap !!}</td>
	   		<td><a href="{{ route ('Cajasp.edit', $adm->id_cajap) }}">Modificar</a></td>
	   		<td><a href="{{ route ('Cajasp.show', $adm->id_cajap) }}">Ver</a></td>
	   		<td>
	   			<form method="POST" action="{{ route('Cajasp.destroy', $adm->id_cajap) }}">
					@csrf
					{!! method_field('DELETE') !!}
	   				<button>Eliminar</button></form>
	   		</td>
   		</tr>
   	@endforeach
   	</table>
    
	<h2><a href="{{ route ('Cajasp.create') }}">Insertar</a></h2>
	{{-- <h2><a href="{{ route ('Cajasp.edit', ) }}">Modificar</a></h2> --}}
	{{-- <h2><a href="{{ route ('Cajasp.show') }}">Ver</a></h2> --}}
	
@stop