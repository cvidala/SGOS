@extends('layout.admin')

@section('content')
	<div class="title m-b-md">
    	Formas Pago                
    </div>

   	<table border="1">
   		<thead>
   			<td>id_forma_pago</td>
   			<td>id_cajap_tipo</td>
   			<td>desc_forma_pago</td>
   			<td>Modificar</td>
   			<td>Ver</td>
   			<td>Eliminar</td>
   		</thead>
    @foreach($Adm as $adm)
   		<tr>
	   		<td>{!! $adm->id_forma_pago !!}</td>
	   		<td>{!! $adm->id_cajap_tipo !!}</td>
	   		<td>{!! $adm->desc_forma_pago !!}</td>
	   		<td><a href="{{ route ('FormasPagos.edit', $adm->id_forma_pago) }}">Modificar</a></td>
	   		<td><a href="{{ route ('FormasPagos.show', $adm->id_forma_pago) }}">Ver</a></td>
	   		<td>
	   			<form method="POST" action="{{ route('FormasPagos.destroy', $adm->id_forma_pago) }}">
					@csrf
					{!! method_field('DELETE') !!}
	   				<button>Eliminar</button></form>
	   		</td>
   		</tr>
   	@endforeach
   	</table>
    
	<h2><a href="{{ route ('FormasPagos.create') }}">Insertar</a></h2>
	{{-- <h2><a href="{{ route ('FormasPagos.edit', ) }}">Modificar</a></h2> --}}
	{{-- <h2><a href="{{ route ('FormasPagos.show') }}">Ver</a></h2> --}}
	
@stop