<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChuongTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chuong', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->unsignedInteger('c_ma')->autoIncrement() ;
            $table->string('c_ten', 100);
            $table->timestamp('c_taoMoi')->default(DB::raw('current_timestamp'));
            $table->timestamp('c_capNhat')->default(DB::raw('current_timestamp'));
            $table->unsignedInteger('t_ma');
            $table->unsignedInteger('c_trangThai');
            $table->unsignedInteger('nv_ma');

            $table->foreign('nv_ma')->references('nv_ma')->on('nhanvien')->onDelete('CASCADE')->onUpdate('CASCADE');
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
        Schema::dropIfExists('chuong');
    }
}
