<?php

use Illuminate\Database\Seeder;


class TacGiaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('Vi_VN');
        $list = [];
        //$sdt = ['1111111111','2222222222','3333333333','4444444444','5555555555'];
        for ($i = 1; $i <= 5; $i++) {
            array_push($list,
                [
                    'tg_ten' => $faker->name($gender = null),
                    'tg_trangThai' => '2'
                ]
            );
        }
        DB::table('tacgia')->insert($list);
    }
}
