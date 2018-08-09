@extends('layout.admin')

@section('content')
	<div class="title m-b-md">
    	Modificar                
    </div>

	<form method="POST" action="{{ route('Cajasp.update', $Adm->id_cajap) }}" >
		{{-- {!! csrf_field()!!} --}}
		@csrf
		{!! method_field('PUT') !!}
		
		<p><label for="id_cajap">
			id_cajap:
			<input type="text" name="id_cajap" value="{!! $Adm->id_cajap !!}" disabled="disabled">
		</label></p>
		<p><label for="id_cajap_tipo">
			id_cajap_tipo: 
			<input type="text" name="id_cajap_tipo" value="{!! $Adm->id_cajap_tipo !!}">
		</label></p>
		<p><label for="desc_cajap">
			desc_cajap: 
			<input type="text" name="desc_cajap" value="{!! $Adm->desc_cajap !!}">
		</label></p>
		<button type="submit">Guardar</button>
		
	</form>
@stop