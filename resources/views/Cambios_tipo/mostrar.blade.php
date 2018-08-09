@extends('layout.admin')

@section('content')
	<div class="title m-b-md">
    	Modificar                
    </div>

	<form action="{{ route('CambiosTipo.index') }}" >
		{{-- {!! csrf_field()!!} --}}
		@csrf
		
		<p><label for="id_cambio_tipo">
			id_cambio_tipo:
			<input type="text" name="id_cambio_tipo" value="{!! $Adm->id_cambio_tipo !!}" disabled="disabled">
		</label></p>
		<p><label for="id_cajap_tipo">
			id_cajap_tipo: 
			<input type="text" name="id_cajap_tipo" value="{!! $Adm->id_cajap_tipo !!}" disabled="disabled">
		</label></p>
		<p><label for="desc_cambio_tipo">
			desc_cambio_tipo: 
			<input type="text" name="desc_cambio_tipo" value="{!! $Adm->desc_cambio_tipo !!}" disabled="disabled">
		</label></p>
		<button type="submit">Volver</button>
		
	</form>
@stop