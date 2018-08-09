@extends('layout.admin')

@section('content')
	<div class="title m-b-md">
    	Modificar                
    </div>

	<form action="{{ route('Cajasp.index') }}" >
		{{-- {!! csrf_field()!!} --}}
		@csrf
		
		<p><label for="id_cajap">
			id_cajap:
			<input type="text" name="id_cajap" value="{!! $Adm->id_cajap !!}" disabled="disabled">
		</label></p>
		<p><label for="id_cajap_tipo">
			id_cajap_tipo: 
			<input type="text" name="id_cajap_tipo" value="{!! $Adm->id_cajap_tipo !!}" disabled="disabled">
		</label></p>
		<p><label for="desc_cajap">
			desc_cajap: 
			<input type="text" name="desc_cajap" value="{!! $Adm->desc_cajap !!}" disabled="disabled">
		</label></p>
		<button type="submit">Volver</button>
		
	</form>
@stop