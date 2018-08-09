<?php

Route::get('/', ['as'=>'home', function () {
    return view('welcome');
}]);

Route::resource('CanjeDestino', 'AdmCajaspCanjeDestinoController');

Route::resource('CanjesTipo', 'AdmCajaspCanjesTipoController');

Route::resource('CambiosTipo', 'AdmCajaspCambiosTipoController');

Route::resource('FormasPagos', 'AdmCajaspFormasPagosController');

Route::resource('Cajasp', 'AdmCajaspController');

Route::resource('TipoMov', 'AdmCajaspTipoMovController');

Route::resource('Tipo', 'AdmCajaspTipoController');