@extends('layout.admin')

@section('content')
	<div class="title m-b-md">
    	Modificar                
    </div>

	<form method="POST" action="{{ route('CanjeDestino.update', $Adm->id_canje_destino) }}" >
		{{-- {!! csrf_field()!!} --}}
		@csrf
		{!! method_field('PUT') !!}
		
		<p><label for="id_canje_destino">
			id_canje_destino:
			<input type="text" name="id_canje_destino" value="{!! $Adm->id_canje_destino !!}" disabled="disabled">
		</label></p>
		<p><label for="desc_canje_destino">
			desc_canje_destino: 
			<input type="text" name="desc_canje_destino" value="{!! $Adm->desc_canje_destino !!}">
		</label></p>
		<button type="submit">Guardar</button>
		
	</form>
@stop