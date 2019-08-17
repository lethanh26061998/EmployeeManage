<?php

use Illuminate\Database\Seeder;

class User extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            ['name'=>'Lê Thanh','email'=>'thanh@gmail.com', 'password'=>bcrypt('matkhau'), 'age'=>'27', 'level'=>'1'],
            ['name'=>'Lê Thoa','email'=>'thoa@gmail.com', 'password'=>bcrypt('matkhau'), 'age'=>'29', 'level'=>'0'],
            ['name'=>'Lê Thị Thành','email'=>'lethanh@gmail.com', 'password'=>bcrypt('matkhau'), 'age'=>'21', 'level'=>'0'],
            ['name'=>'Vũ Thị Xinh','email'=>'vuxinh@gmail.com', 'password'=>bcrypt('matkhau'), 'age'=>'21', 'level'=>'0'],
            ['name'=>'Dương Thị Thoa','email'=>'duongthoa@gmail.com', 'password'=>bcrypt('matkhau'), 'age'=>'21', 'level'=>'0'],
            ['name'=>'Lê Văn Anh','email'=>'leanh@gmail.com', 'password'=>bcrypt('matkhau'), 'age'=>'18', 'level'=>'0'],
            ['name'=>'Lê Văn Bảo','email'=>'lebao@gmail.com', 'password'=>bcrypt('matkhau'), 'age'=>'18', 'level'=>'0'],
            ['name'=>'Lê Thị Nhi','email'=>'lenhi@gmail.com', 'password'=>bcrypt('matkhau'), 'age'=>'18', 'level'=>'0'],
            ['name'=>'Lê Thị Hải Yến','email'=>'leyen@gmail.com', 'password'=>bcrypt('matkhau'), 'age'=>'20', 'level'=>'0'],
            ['name'=>'Lê Thị Phương Hà','email'=>'leha@gmail.com', 'password'=>bcrypt('matkhau'), 'age'=>'20', 'level'=>'0'],
            ['name'=>'Đỗ Văn An','email'=>'doan@gmail.com', 'password'=>bcrypt('matkhau'), 'age'=>'30', 'level'=>'0'],
            ['name'=>'Đỗ Duy Vũ','email'=>'dovu@gmail.com', 'password'=>bcrypt('matkhau'), 'age'=>'28', 'level'=>'0'],
            ['name'=>'Đỗ Thị Đào','email'=>'dodao@gmail.com', 'password'=>bcrypt('matkhau'), 'age'=>'30', 'level'=>'0'],
            ['name'=>'Lê Thị Mai','email'=>'lemai@gmail.com', 'password'=>bcrypt('matkhau'), 'age'=>'40', 'level'=>'0'],
            ['name'=>'Nguyễn Văn Cường','email'=>'nguyencuong@gmail.com', 'password'=>bcrypt('matkhau'), 'age'=>'30', 'level'=>'0'],


        ]);
    }
}
