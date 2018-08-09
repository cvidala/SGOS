<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdmCajaspTipo extends Model
{
    //use SoftDeletes;
    //protected $dates = ['deleted_at'];

	//Variables
    protected $table = 'adm_cajasp_tipo';
    protected $fillable = ['id_boveda','desc_cajap'];
    protected $primaryKey =  'id_cajap_tipo';
    public $timestamps = true;

    //----------------------------------------------------------------------------------//
    //Relaciones
    public function AdmCajaspCanjesTipo (){
    	//return $this->belongsTo('app\Models\AdmCajaspCanjesTipo','id_cajap_tipo');
        return $this->hasMany('app\Models\AdmCajaspCanjesTipo','id_cajap_tipo');}

    public function AdmCajaspCambiosTipo (){
        //return $this->belongsTo('app\Models\AdmCajaspCanjesTipo','id_cajap_tipo');
        return $this->hasMany('app\Models\AdmCajaspCambiosTipo','id_cajap_tipo');}

    public function AdmCajaspFormasPago (){
        //return $this->belongsTo('app\Models\AdmCajaspCanjesTipo','id_cajap_tipo');
        return $this->hasMany('app\Models\AdmCajaspFormasPago','id_cajap_tipo');}

    public function AdmCajasp (){
        //return $this->belongsTo('app\Models\AdmCajaspCanjesTipo','id_cajap_tipo');
        return $this->hasMany('app\Models\AdmCajasp','id_cajap_tipo');}

    public function AdmCajaspTipoMov (){
        //return $this->belongsTo('app\Models\AdmCajaspCanjesTipo','id_cajap_tipo');
        return $this->hasMany('app\Models\AdmCajaspTipoMov','id_cajap_tipo');}
}
