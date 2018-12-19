<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHinhanhTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hinhanh', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->unsignedBigInteger('ha_stt');
            $table->string('ha_ten', 100);
            $table->unsignedInteger('c_ma');

            $table->primary(['c_ma', 'ha_stt']);

            $table->foreign('c_ma')->references('c_ma')->on('chuong')->onDelete('CASCADE')->onUpdate('CASCADE');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hinhanh');
    }
}
