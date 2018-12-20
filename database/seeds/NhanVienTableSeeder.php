<?php

use Illuminate\Database\Seeder;
class NhanVienTableSeeder extends Seeder
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
        $sdt = ['1111111111','2222222222','3333333333','4444444444'];
        $tk = ['ale', 'jcam', 'khuc.tr','nhan74'];
        for ($i = 1; $i <= 4; $i++) {
            array_push($list,
                [
                    'nv_ten' => $faker->name($gender = null),
                    'nv_email' => $faker->freeEmail(),
                    'nv_sdt' => $sdt[$i-1],
                    'nv_diaChi' => $faker->address(),
                    'nv_ngaySinh' => $faker->date(),
                    'tk_tenDangNhap' => $tk[$i -1]
                ]
            );
        }
        DB::table('nhanvien')->insert($list);
    }
}
