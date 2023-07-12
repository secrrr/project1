<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('admins')->insert([
            'nama' => 'Cavel Yoga',
            'alamat' => 'Citraland',
            'NoHp' => '+6281357165282',
        ]);
    }
}
