<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $param = [
            [
                'unit_count' => 5,
                'start_time' => '2023:9:13',
                'name' => 'Test',
                'name_kana' => 'テスト',
                'post_code' => '111-111',
                'address_1' => '岩手県',
                'address_2' => '一関市',
                'address_3' => 'hoge番地',
                'tel_number' => '080-1111-1111',
                'email' => 'test@gmail.com',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]
        ];
        
        DB::table('customers')->insert($param);
    }
}
