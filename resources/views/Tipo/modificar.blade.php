@extends('layout.admin')

@section('content')
	<div class="title m-b-md">
    	Modificar                
    </div>

	<form method="POST" action="{{ route('Tipo.update', $Adm->id_cajap_tipo) }}" >
		{{-- {!! csrf_field()!!} --}}
		@csrf
		{!! method_field('PUT') !!}
		
		<p><label for="id_cajap_tipo">
			id_cajap_tipo:
			<input type="text" name="id_cajap_tipo" value="{!! $Adm->id_cajap_tipo !!}" disabled="disabled">
		</label></p>
		<p><label for="id_boveda">
			id_boveda: 
			<input type="text" name="id_boveda" value="{!! $Adm->id_boveda !!}">
		</label></p>
		<p><label for="desc_cajap">
			desc_cajap: 
			<input type="text" name="desc_cajap" value="{!! $Adm->desc_cajap !!}">
		</label></p>
		<button type="submit">Guardar</button>
		
	</form>
@stop