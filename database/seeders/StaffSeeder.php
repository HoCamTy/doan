<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        

        $data = [];

        for ($i = 0; $i < 1000; $i++) {
            $data[] = [
                'staff_name' =>fake()->name(),
                'staff_phone' =>fake()->unique()->numerify('09#########'),
                'email' =>fake()->unique()->safeEmail(),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('staff')->insert($data);
    }
}
