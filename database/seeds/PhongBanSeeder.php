<?php

use Illuminate\Database\Seeder;

class PhongBanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

    DB::table('phongbans')->insert([
     ['name_phongban'=>'Phòng hành chính'],
     ['name_phongban'=>'Phòng tài chính'],
     ['name_phongban'=>'Phòng kinh doanh'],
     ['name_phongban'=>'Phòng nhân sự']
    ]);
    }
}
