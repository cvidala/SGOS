@extends('layout.admin')

@section('content')
	<div class="title m-b-md">
    	Modificar                
    </div>

	<form action="{{ route('FormasPagos.index') }}" >
		{{-- {!! csrf_field()!!} --}}
		@csrf
		
		<p><label for="id_forma_pago">
			id_forma_pago:
			<input type="text" name="id_forma_pago" value="{!! $Adm->id_forma_pago !!}" disabled="disabled">
		</label></p>
		<p><label for="id_cajap_tipo">
			id_cajap_tipo: 
			<input type="text" name="id_cajap_tipo" value="{!! $Adm->id_cajap_tipo !!}" disabled="disabled">
		</label></p>
		<p><label for="desc_forma_pago">
			desc_forma_pago: 
			<input type="text" name="desc_forma_pago" value="{!! $Adm->desc_forma_pago !!}" disabled="disabled">
		</label></p>
		<button type="submit">Volver</button>
		
	</form>
@stop