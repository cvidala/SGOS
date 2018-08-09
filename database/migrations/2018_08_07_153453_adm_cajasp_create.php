<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdmCajaspCreate extends Migration
{

    public function up()
    {
        Schema::create('adm_cajasp', function (Blueprint $table) {
            $table->increments('id_cajap');
            
            $table->unsignedInteger('id_cajap_tipo');
            $table->foreign('id_cajap_tipo')->references('id_cajap_tipo')->on('adm_cajasp_tipo');
            
            $table->string('desc_cajap',45);
            $table->timestamps();
            $table->softDeletes();
    });
    }

    public function down()
    {
        Schema::dropIfExists('adm_cajasp');
    }
}
