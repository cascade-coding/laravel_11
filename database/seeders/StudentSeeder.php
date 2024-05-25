<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

use Faker\Factory as Faker;

use Carbon\Carbon;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 100) as $value) {
            $now = Carbon::now();

            DB::table('students')->insert([
                'name' => $faker->name(),
                'email' => $faker->unique()->safeEmail(),
                'city' => $faker->city(),
                'marks' => $faker->randomNumber(2),
                'created_at' => $now,
                'updated_at' => $now,
            ]);
        }
    }
}
