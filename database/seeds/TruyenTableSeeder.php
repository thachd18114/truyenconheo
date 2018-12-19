<?php

use Illuminate\Database\Seeder;

class TruyenTableSeeder extends Seeder
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

        for ($i=1; $i <= 5; $i++) {
            array_push($list, [
                't_ten'      => $faker->name(),
                'tg_ma'     => $faker->numberBetween(6,10),
                't_trangThai' => '2',
                't_moTa' => $faker->text(50),
                't_luotXem' => $faker->numberBetween(1000, 10000),
                't_hinhDaiDien' => $faker->regexify('A-Z0-9')
            ]);
        }
        DB::table('truyen')->insert($list);
    }
}
