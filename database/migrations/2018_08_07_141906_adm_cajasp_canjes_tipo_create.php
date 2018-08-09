<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdmCajaspCanjesTipoCreate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adm_cajasp_canjes_tipo', function (Blueprint $table) {
            $table->increments('id_canjes_tipo');
            
            $table->unsignedInteger('id_cajap_tipo');
            $table->foreign('id_cajap_tipo')->references('id_cajap_tipo')->on('adm_cajasp_tipo');

            $table->string('desc_canje_tipo',45);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adm_cajasp_canjes_tipo');
    }
}
