<?php

use Illuminate\Database\Seeder;

class TheLoaiTableSeeder extends Seeder
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
        $types = ["Hành động", "Tình cảm", "Trinh thám", "Thiếu nhi", "Tiên hiệp",
            "Anime", "Chuyển sinh", "Manga", "Thể thao"];
        sort($types);
        for ($i=1; $i <= count($types); $i++) {
            array_push($list, [
                'tl_ma'      => $i,
                'tl_ten'     => $types[$i-1],
                'tl_moTa'   => $faker->text(21),
                'tl_trangThai' => '2'
            ]);
        }
        DB::table('theloai')->insert($list);
    }
}
