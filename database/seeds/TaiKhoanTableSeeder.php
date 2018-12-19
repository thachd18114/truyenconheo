<?php

use Illuminate\Database\Seeder;

class TaiKhoanTableSeeder extends Seeder
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
                'tk_tenDangNhap'      => $faker->userName(),
                'tk_matKhau'     => $faker->password(),
                'q_ma' => $faker->numberBetween(1,3),
                'tk_trangThai' => '2'
            ]);
        }
        DB::table('taikhoan')->insert($list);
    }
}
