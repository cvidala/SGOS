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

	<form method="POST" action="{{ route('CanjeDestino.store') }}" >
		{{-- {!! csrf_field()!!} --}}
		@csrf
		<p><label for="id_canje_destino">
			id_canje_destino: 
			<input type="text" name="id_canje_destino" disabled="disabled">
		</label></p>
		<p><label for="desc_canje_destino">
			desc_canje_destino: 
			<input type="text" name="desc_canje_destino">
		</label></p>
		<button type="submit">Guardar</button>
	</form>

@stop