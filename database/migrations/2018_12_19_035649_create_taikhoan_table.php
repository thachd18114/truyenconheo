<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaikhoanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taikhoan', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->string('tk_tenDangNhap', 20);
            $table->string('tk_matKhau', 256);
            $table->unsignedInteger('q_ma');
            $table->unsignedInteger('tk_trangThai');
            $table->timestamp('tk_taoMoi')->default(DB::raw('current_timestamp'));
            $table->timestamp('tk_capNhat')->default(DB::raw('current_timestamp'));

            $table->primary('tk_tenDangNhap');
            $table->foreign('q_ma')->references('q_ma')->on('quyen')->onDelete('CASCADE')->onUpdate('CASCADE');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('taikhoan');
    }
}
