<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTheodoiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('theodoi', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->unsignedInteger('t_ma');
            $table->string('tk_tenDangNhap', 20);

            $table->primary(['t_ma','tk_tenDangNhap']);
            $table->foreign('tk_tenDangNhap')->references('tk_tenDangNhap')->on('taikhoan')->onDelete('CASCADE')->onUpdate('CASCADE');
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
        Schema::dropIfExists('theodoi');
    }
}
