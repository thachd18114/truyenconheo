<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuyenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quyen', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->unsignedInteger('q_ma')->autoIncrement() ;
            $table->string('q_ten', 50);
            $table->unsignedInteger('q_trangThai');
            $table->timestamp('q_taoMoi')->default(DB::raw('current_timestamp'));
            $table->timestamp('q_capNhat')->default(DB::raw('current_timestamp'));

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quyen');
    }
}
