@extends('layout.admin')

@section('content')
	<div class="title m-b-md">
    	Modificar                
    </div>

	<form action="{{ route('CanjesTipo.index') }}" >
		{{-- {!! csrf_field()!!} --}}
		@csrf
		
		<p><label for="id_canjes_tipo">
			id_canjes_tipo:
			<input type="text" name="id_canjes_tipo" value="{!! $Adm->id_canjes_tipo !!}" disabled="disabled">
		</label></p>
		<p><label for="id_cajap_tipo">
			id_cajap_tipo: 
			<input type="text" name="id_cajap_tipo" value="{!! $Adm->id_cajap_tipo !!}" disabled="disabled">
		</label></p>
		<p><label for="desc_canje_tipo">
			desc_canje_tipo: 
			<input type="text" name="desc_canje_tipo" value="{!! $Adm->desc_canje_tipo !!}" disabled="disabled">
		</label></p>
		<button type="submit">Volver</button>
		
	</form>
@stop