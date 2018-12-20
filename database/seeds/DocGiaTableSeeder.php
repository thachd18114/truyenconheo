<?php

use Illuminate\Database\Seeder;

class DocGiaTableSeeder extends Seeder
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

            array_push($list,
                [
                    'dg_ten' => $faker->name($gender = null),
                    'dg_email' => $faker->freeEmail(),
                    'dg_ngaySinh' => $faker->date(),
                    'dg_trangThai' => '2',
                    'tk_tenDangNhap' => 'moc.dao'
                ]
            );
        DB::table('docgia')->insert($list);
    }
}
