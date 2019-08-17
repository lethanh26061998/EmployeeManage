<?php

use Illuminate\Database\Seeder;

class PhongBan_UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('phongban_user')->insert([

            ['user_id'=>'1', 'chuc_vu'=>'Trưởng phòng', 'phongban_id'=>'1'],
            ['user_id'=>'2', 'chuc_vu'=>'Nhân viên', 'phongban_id'=>'1'],
            ['user_id'=>'3', 'chuc_vu'=>'Nhân viên', 'phongban_id'=>'1' ],
            ['user_id'=>'4', 'chuc_vu'=>'Trưởng phòng', 'phongban_id'=>'2' ],
            ['user_id'=>'5', 'chuc_vu'=>'Nhân viên', 'phongban_id'=>'2' ],
            ['user_id'=>'6', 'chuc_vu'=>'Nhân viên', 'phongban_id'=>'2' ],
            ['user_id'=>'7', 'chuc_vu'=>'Trưởng phòng', 'phongban_id'=>'3' ],
            ['user_id'=>'8', 'chuc_vu'=>'Nhân viên', 'phongban_id'=>'3' ],
            ['user_id'=>'9', 'chuc_vu'=>'Nhân viên', 'phongban_id'=>'3' ],
            ['user_id'=>'10', 'chuc_vu'=>'Nhân viên', 'phongban_id'=>'3' ],
            ['user_id'=>'11', 'chuc_vu'=>'Trưởng phòng', 'phongban_id'=>'4' ],
            ['user_id'=>'12', 'chuc_vu'=>'Nhân viên', 'phongban_id'=>'4' ],
            ['user_id'=>'13', 'chuc_vu'=>'Nhân viên', 'phongban_id'=>'4' ],
            ['user_id'=>'14', 'chuc_vu'=>'Nhân viên', 'phongban_id'=>'4' ],
            ['user_id'=>'15', 'chuc_vu'=>'Nhân viên', 'phongban_id'=>'4' ]


        ]);
    }
}
