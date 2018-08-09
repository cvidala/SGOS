<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdmCajaspCambiosTipo extends Model
{
    //use SoftDeletes;
    //protected $dates = ['deleted_at'];

	//Variables
    protected $table = 'adm_cajasp_cambios_tipo';
    protected $fillable = ['id_cajap_tipo','desc_cambio_tipo'];
    protected $primaryKey =  'id_cambio_tipo';
    public $timestamps = true;

    //Relaciones
    public function AdmCajaspTipo (){
    	return $this->belongsTo('app\Models\AdmCajaspTipo','id_cajap_tipo');
        //return $this->hasMany('app\Models\AdmCajaspCanjesTipo','id_cajap_tipo');
    }

}
