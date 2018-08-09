<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdmCajasp extends Model
{
    //use SoftDeletes;
    //protected $dates = ['deleted_at'];

	//Variables
    protected $table = 'adm_cajasp';
    protected $fillable = ['id_cajap_tipo','desc_cajap'];
    protected $primaryKey =  'id_cajap';
    public $timestamps = true;

    //Relaciones
    public function AdmCajaspTipo (){
    	return $this->belongsTo('app\Models\AdmCajaspTipo','id_cajap_tipo');
        //return $this->hasMany('app\Models\AdmCajaspCanjesTipo','id_cajap_tipo');
    }

}
