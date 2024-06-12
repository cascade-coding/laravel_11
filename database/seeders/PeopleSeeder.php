<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeopleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = DB::table('people')
            ->select('gender', DB::raw('COUNT(*) as total'))
            ->groupBy('gender')
            ->get()
            ->map(function ($item) {
                return (array) $item;
            })
            ->toArray();

        $headers = ['gender', 'total'];

        $this->command->table($headers, $data);

        $data = DB::table('people')
            ->where('gender', '=', 'Polygender')
            ->inRandomOrder()
            ->get()
            ->map(function ($item) {
                return (array) $item;
            })
            ->toArray();


        $headers = ['id', 'first_name', 'last_name', 'eamil', 'gender', 'age'];

        $this->command->table($headers, $data);
    }
}
