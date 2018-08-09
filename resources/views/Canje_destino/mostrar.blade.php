@extends('layout.admin')

@section('content')
	<div class="title m-b-md">
    	Modificar                
    </div>

	<form action="{{ route('CanjeDestino.index') }}" >
		{{-- {!! csrf_field()!!} --}}
		@csrf
		
		<p><label for="id_canje_destino">
			id_canje_destino:
			<input type="text" name="id_canje_destino" value="{!! $Adm->id_canje_destino !!}" disabled="disabled">
		</label></p>
		<p><label for="desc_canje_destino">
			desc_canje_destino: 
			<input type="text" name="desc_canje_destino" value="{!! $Adm->desc_canje_destino !!}" disabled="disabled">
		</label></p>
		<button type="submit">Volver</button>
		
	</form>
@stop