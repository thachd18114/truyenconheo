<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTheloaiTruyenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('theloai_truyen', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->unsignedInteger('tl_ma');
            $table->unsignedInteger('t_ma');

            $table->primary(['tl_ma', 't_ma']);

            $table->foreign('tl_ma')->references('tl_ma')->on('theloai')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('t_ma')->references('t_ma')->on('truyen')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('theloai_truyen');
    }
}
