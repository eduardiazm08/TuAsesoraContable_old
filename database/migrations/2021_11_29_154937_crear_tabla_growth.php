<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaGrowth extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('growth', function (Blueprint $table) {
            $table->id();

            $table->string('titulo');
            $table->text('descripcion');

            $table->string('img_uno');
            $table->string('tit_uno');
            $table->text('content_uno');
            $table->string('url_uno');
            $table->string('txt_btn_uno');

            $table->string('img_dos');
            $table->string('tit_dos');
            $table->text('content_dos');
            $table->string('url_dos');
            $table->string('txt_btn_dos');

            $table->string('img_tres');
            $table->string('tit_tres');
            $table->text('content_tres');
            $table->string('url_tres');
            $table->string('txt_btn_tres');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('growth');
    }
}
