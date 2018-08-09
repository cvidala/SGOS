@extends('layout.admin')

@section('content')
	<div class="title m-b-md">
    	Modificar                
    </div>

	<form method="POST" action="{{ route('FormasPagos.update', $Adm->id_forma_pago) }}" >
		{{-- {!! csrf_field()!!} --}}
		@csrf
		{!! method_field('PUT') !!}
		
		<p><label for="id_forma_pago">
			id_forma_pago:
			<input type="text" name="id_forma_pago" value="{!! $Adm->id_forma_pago !!}" disabled="disabled">
		</label></p>
		<p><label for="id_cajap_tipo">
			id_cajap_tipo: 
			<input type="text" name="id_cajap_tipo" value="{!! $Adm->id_cajap_tipo !!}">
		</label></p>
		<p><label for="desc_forma_pago">
			desc_forma_pago: 
			<input type="text" name="desc_forma_pago" value="{!! $Adm->desc_forma_pago !!}">
		</label></p>
		<button type="submit">Guardar</button>
		
	</form>
@stop