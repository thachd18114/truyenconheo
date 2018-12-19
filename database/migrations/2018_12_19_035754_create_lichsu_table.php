<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLichsuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lichsu', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('ls_ma');
            $table->string('tk_tenDangNhap', 20);
            $table->unsignedInteger('c_ma');
            $table->timestamp('ls_ngayDoc')->default(DB::raw('current_timestamp'));

            $table->foreign('tk_tenDangNhap')->references('tk_tenDangNhap')->on('taikhoan')->onDelete('CASCADE')->onUpdate('CASCADE');
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
        Schema::dropIfExists('lichsu');
    }
}
