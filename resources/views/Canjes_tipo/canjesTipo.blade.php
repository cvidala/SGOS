@extends('layout.admin')

@section('content')
	<div class="title m-b-md">
    	Canjes Tipo                
    </div>

   	<table border="1">
   		<thead>
   			<td>id_canjes_tipo</td>
   			<td>id_cajap_tipo</td>
   			<td>desc_canje_tipo</td>
   			<td>Modificar</td>
   			<td>Ver</td>
   			<td>Eliminar</td>
   		</thead>
    @foreach($Adm as $adm)
   		<tr>
	   		<td>{!! $adm->id_canjes_tipo !!}</td>
	   		<td>{!! $adm->id_cajap_tipo !!}</td>
	   		<td>{!! $adm->desc_canje_tipo !!}</td>
	   		<td><a href="{{ route ('CanjesTipo.edit', $adm->id_canjes_tipo) }}">Modificar</a></td>
	   		<td><a href="{{ route ('CanjesTipo.show', $adm->id_canjes_tipo) }}">Ver</a></td>
	   		<td>
	   			<form method="POST" action="{{ route('CanjesTipo.destroy', $adm->id_canjes_tipo) }}">
					@csrf
					{!! method_field('DELETE') !!}
	   				<button>Eliminar</button></form>
	   		</td>
   		</tr>
   	@endforeach
   	</table>
    
	<h2><a href="{{ route ('CanjesTipo.create') }}">Insertar</a></h2>
	{{-- <h2><a href="{{ route ('CanjesTipo.edit', ) }}">Modificar</a></h2> --}}
	{{-- <h2><a href="{{ route ('CanjesTipo.show') }}">Ver</a></h2> --}}
	
@stop