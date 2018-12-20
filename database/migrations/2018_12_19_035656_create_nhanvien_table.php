<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNhanvienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhanvien', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('nv_ma');
            $table->string('nv_ten', 50);
            $table->string('nv_email', 100);
            $table->string('nv_sdt', 10);
            $table->string('nv_diaChi', 250 );
            $table->date('nv_ngaySinh');
            $table->string('tk_tenDangNhap', 20);
            $table->timestamp('nv_taoMoi')->default(DB::raw('current_timestamp'));
            $table->timestamp('nv_capNhat')->default(DB::raw('current_timestamp'));

            $table->foreign('tk_tenDangNhap')->references('tk_tenDangNhap')->on('taikhoan')->onDelete('CASCADE')->onUpdate('CASCADE');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nhanvien');
    }
}
