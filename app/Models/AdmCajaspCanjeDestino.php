<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdmCajaspCanjeDestino extends Model
{
    //use SoftDeletes;
    //protected $dates = ['deleted_at'];

	//Variables
    protected $table = 'adm_cajasp_canje_destino';
    protected $fillable = ['desc_canje_destino'];
    protected $primaryKey =  'id_canje_destino';
    public $timestamps = true;

}
