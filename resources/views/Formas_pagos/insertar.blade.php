@extends('layout.admin')

@section('content')
	<div class="title m-b-md">
    	Insertar nuevo                
    </div> 

    @if ($errors->any())
	   <div class="alert alert-danger">
	       <ul>
	           @foreach ($errors->all() as $error)
	               <li>{{ $error }}</li>
	           @endforeach
	       </ul>
	   </div>
	@endif

	<form method="POST" action="{{ route('FormasPagos.store') }}" >
		{{-- {!! csrf_field()!!} --}}
		@csrf
		<p><label for="id_forma_pago" >
			id_forma_pago: 
			<input type="text" name="id_forma_pago" " disabled="disabled">
		</label></p>
		<p><label for="id_cajap_tipo">
			id_cajap_tipo: 
			<input type="text" name="id_cajap_tipo">
		</label></p>
		<p><label for="desc_forma_pago">
			desc_forma_pago: 
			<input type="text" name="desc_forma_pago">
		</label></p>
		<button type="submit">Guardar</button>
	</form>

@stop