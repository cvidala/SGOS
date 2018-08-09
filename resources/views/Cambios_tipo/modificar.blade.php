@extends('layout.admin')

@section('content')
	<div class="title m-b-md">
    	Insertar nuevo                
    </div> 

	<form method="POST" action="{{ route('CambiosTipo.store') }}" >
		{{-- {!! csrf_field()!!} --}}
		@csrf
		<p><label for="id_cambio_tipo" >
			id_cambio_tipo: 
			<input type="text" name="id_cambio_tipo" " disabled="disabled">
		</label></p>
		<p><label for="id_cajap_tipo">
			id_cajap_tipo: 
			<input type="text" name="id_cajap_tipo">
		</label></p>
		<p><label for="desc_cambio_tipo">
			desc_cambio_tipo: 
			<input type="text" name="desc_cambio_tipo">
		</label></p>
		<button type="submit">Guardar</button>
	</form>

@stop