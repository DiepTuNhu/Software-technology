<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'fullname' => 'vodiem',
                'password' => bcrypt('12345678'),
                'email' => 'vodiem2003@gmail.com',
                'address' => 'Trà Vinh',
            ],
            [
                'fullname' => 'user2',
                'password' => bcrypt('12345678'),
                'email' => 'user2@example.com',
                'address' => 'Địa chỉ 2',
            ],
        ];

        // Insert dữ liệu vào bảng nguoi_dung
        DB::table('users')->insert($data);
    }
}
