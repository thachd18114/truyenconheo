<?php

use Illuminate\Database\Seeder;

class QuyenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $list = [];
        $types = ["Quản trị", "Đọc giả", "Nhân viên"];
        sort($types);
        for ($i=1; $i <= count($types); $i++) {
            array_push($list, [
                'q_ten'     => $types[$i-1],
                'q_trangThai' => '2'
            ]);
        }
        DB::table('quyen')->insert($list);
    }
}
