<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdmCajaspFormasPagoCreate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adm_cajasp_formas_pagos', function (Blueprint $table) {
            $table->increments('id_forma_pago');
            //$table->integer('id_cajap_tipo')->references('id_cajap_tipo')->on('adm_cajasp_tipo');
            $table->unsignedInteger('id_cajap_tipo');
            $table->foreign('id_cajap_tipo')->references('id_cajap_tipo')->on('adm_cajasp_tipo');

            $table->string('desc_forma_pago',45);
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
        Schema::dropIfExists('adm_cajasp_formas_pagos');
    }
}
