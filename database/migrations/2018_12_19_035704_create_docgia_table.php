<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocgiaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('docgia', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('dg_ma');
            $table->string('dg_ten', 50);
            $table->string('dg_email', 100);
            $table->date('dg_ngaySinh');
            $table->unsignedInteger('dg_trangThai');
            $table->string('tk_tenDangNhap', 20);
            $table->timestamp('dg_taoMoi')->default(DB::raw('current_timestamp'));
            $table->timestamp('dg_capNhat')->default(DB::raw('current_timestamp'));

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
        Schema::dropIfExists('docgia');
    }
}
