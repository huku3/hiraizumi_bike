<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BikeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $param=[];
        for ($i=0; $i <50 ; $i++) { 
            $param[] = ['type' => '一般'];
            $param[] = ['type' => '電動'];

        }


        DB::table('bikes')->insert($param);
    }
}

