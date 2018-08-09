<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class AdmCajaspCanjeDestinoCreate extends Migration
{

    public function up()
    {
        Schema::create('adm_cajasp_canje_destino', function (Blueprint $table) {
            $table->increments('id_canje_destino');
            $table->string('desc_canje_destino',45);
            $table->timestamps();
            $table->softDeletes();
    });
    }

    public function down()
    {
        Schema::dropIfExists('adm_cajasp_canje_destino');
    }
}
