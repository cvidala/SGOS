<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdmCajaspFormasPagos extends Model
{
    //use SoftDeletes;
    //protected $dates = ['deleted_at'];

	//Variables
    protected $table = 'adm_cajasp_formas_pagos';
    protected $fillable = ['id_cajap_tipo','desc_forma_pago'];
    protected $primaryKey =  'id_forma_pago';
    public $timestamps = true;

    //Relaciones
    public function AdmCajaspTipo (){
    	return $this->belongsTo('app\Models\AdmCajaspTipo','id_cajap_tipo');
        //return $this->hasMany('app\Models\AdmCajaspCanjesTipo','id_cajap_tipo');
    }

}
