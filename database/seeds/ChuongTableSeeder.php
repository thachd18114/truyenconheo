<?php

use Illuminate\Database\Seeder;

class ChuongTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('vi_VN');
        $list = [];

        for ($i=1; $i <= 10; $i++) {
            array_push($list, [
                'c_ten'      => $faker->text(20),
                't_ma'     => $faker->numberBetween(1,5),
                'nv_ma' => $faker->numberBetween(1,4),
                'c_trangThai' => '2'
            ]);
        }
        DB::table('chuong')->insert($list);
    }
}
