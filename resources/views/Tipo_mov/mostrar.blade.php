@extends('layout.admin')

@section('content')
	<div class="title m-b-md">
    	Modificar                
    </div>

	<form action="{{ route('TipoMov.index') }}" >
		{{-- {!! csrf_field()!!} --}}
		@csrf
		
		<p><label for="id_tipo_mov">
			id_tipo_mov:
			<input type="text" name="id_tipo_mov" value="{!! $Adm->id_tipo_mov !!}" disabled="disabled">
		</label></p>
		<p><label for="id_cajap_tipo">
			id_cajap_tipo: 
			<input type="text" name="id_cajap_tipo" value="{!! $Adm->id_cajap_tipo !!}" disabled="disabled">
		</label></p>
		<p><label for="desc_cajap_mov">
			desc_cajap_mov: 
			<input type="text" name="desc_cajap_mov" value="{!! $Adm->desc_cajap_mov !!}" disabled="disabled">
		</label></p>
		<button type="submit">Volver</button>
		
	</form>
@stop