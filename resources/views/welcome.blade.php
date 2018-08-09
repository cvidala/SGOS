@extends('layout.admin')

@section('content')
    <div class="title m-b-md">
        Cajas premio                
    </div>


    <li><a href="{{ route ('CanjeDestino.index') }}">Canje destino</a></li>
    <li><a href="{{ route ('CanjesTipo.index') }}">Canjes tipo</a></li>
    <li><a href="{{ route ('CambiosTipo.index') }}">Cambios tipo</a></li>
    <li><a href="{{ route ('FormasPagos.index') }}">Formas pago</a></li>
    <li><a href="{{ route ('Cajasp.index') }}">Cajasp</a></li>
    <li><a href="{{ route ('TipoMov.index') }}">Tipo Movimiento</a></li>
    <li><a href="{{ route ('Tipo.index') }}">Tipo</a></li>


@stop


