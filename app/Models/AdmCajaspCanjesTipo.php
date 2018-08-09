<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdmCajaspCanjesTipo extends Model
{
    //use SoftDeletes;
    //protected $dates = ['deleted_at'];

	//Variables
    protected $table = 'adm_cajasp_canjes_tipo';
    protected $fillable = ['id_cajap_tipo','desc_canje_tipo'];
    protected $primaryKey =  'id_canjes_tipo';
    public $timestamps = true;

    //Relaciones
    public function AdmCajaspTipo (){
    	return $this->belongsTo('app\Models\AdmCajaspTipo','id_cajap_tipo');
        //return $this->hasMany('app\Models\AdmCajaspCanjesTipo','id_cajap_tipo');
    }

}
