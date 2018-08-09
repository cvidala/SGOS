<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdmCajaspTipoMov extends Model
{
    //use SoftDeletes;
    //protected $dates = ['deleted_at'];

	//Variables
    protected $table = 'adm_cajasp_tipo_mov';
    protected $fillable = ['id_cajap_tipo','desc_cajap_mov'];
    protected $primaryKey =  'id_tipo_mov';
    public $timestamps = true;

    //Relaciones
    public function AdmCajaspTipo (){
    	return $this->belongsTo('app\Models\AdmCajaspTipo','id_cajap_tipo');
        //return $this->hasMany('app\Models\AdmCajaspCanjesTipo','id_cajap_tipo');
    }

}
