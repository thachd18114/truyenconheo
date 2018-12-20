<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTheloaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('theloai', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->unsignedInteger('tl_ma')->autoIncrement() ;
            $table->string('tl_ten', 50);
            $table->timestamp('l_taoMoi')->default(DB::raw('current_timestamp'));
            $table->timestamp('l_capNhat')->default(DB::raw('current_timestamp'));
            $table->unsignedInteger('tl_trangThai');
            $table->text('tl_moTa');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('theloai');
    }
}
