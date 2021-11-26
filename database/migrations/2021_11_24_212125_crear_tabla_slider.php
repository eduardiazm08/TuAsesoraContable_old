<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaSlider extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slider', function (Blueprint $table) {
            $table->id();

            $table->string('rute_img_slider');
            $table->string('tit_slider', 100)->nullable();
            $table->string('tit_des_slider', 100)->nullable();
            $table->text('desc_slider')->nullable();
            $table->string('txt_btn_slider', 20)->nullable();
            $table->string('url_btn_slider')->nullable();
            
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
        Schema::dropIfExists('slider');
    }
}
