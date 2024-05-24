<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use Faker\Factory as Faker;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('students')->insert([
        //     'name' => 'Ryan',
        //     'email' => 'ryan@gmail.com',
        //     'password' => Hash::make("545kljfsdlf"),
        // ]);

        // DB::table('students')->insert([
        //     'name' => Str::random(10),
        //     'email' => Str::random(10) . '@gmail.com',
        //     'password' => Hash::make(Str::random(10)),
        // ]);


        // foreach (range(1, 20) as $value) {
        //     DB::table('students')->insert([
        //         'name' => Str::random(10),
        //         'email' => Str::random(10) . '@gmail.com',
        //         'password' => Hash::make(Str::random(10)),
        //     ]);
        // }

        $faker = Faker::create();

        foreach (range(1, 200) as $value) {
            DB::table('students')->insert([
                'name' => $faker->name(),
                'email' => $faker->unique()->safeEmail(),
                'password' => Hash::make($faker->password()),
            ]);
        }
    }
}
