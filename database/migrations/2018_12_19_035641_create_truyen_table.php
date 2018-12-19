<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTruyenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('truyen', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->unsignedInteger('t_ma')->autoIncrement() ;
            $table->string('t_ten', 100);
            $table->timestamp('t_taoMoi')->default(DB::raw('current_timestamp'));
            $table->timestamp('t_capNhat')->default(DB::raw('current_timestamp'));
            $table->unsignedInteger('tg_ma');
            $table->unsignedInteger('t_trangThai');
            $table->text('t_moTa');
            $table->unsignedBigInteger('t_luotXem');
            $table->string('t_hinhDaiDien', 200);

            $table->unique('t_ten');
            $table->foreign('tg_ma')->references('tg_ma')->on('tacgia')->onDelete('CASCADE')->onUpdate('CASCADE');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('truyen');
    }
}
