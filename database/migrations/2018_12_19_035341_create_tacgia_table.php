<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTacgiaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tacgia', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->unsignedInteger('tg_ma')->autoIncrement();
            $table->string('tg_ten', 50);
            $table->unsignedInteger('tg_trangThai');
            $table->timestamp('tg_taoMoi')->default(DB::raw('current_timestamp'));
            $table->timestamp('tg_capNhat')->default(DB::raw('current_timestamp'));

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tacgia');
    }
}
