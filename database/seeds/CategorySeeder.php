<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([

            [
                'name' => 'sudaderas',
            ],
            [
                'name' => 'camisetas',
            ],
            [
                'name' => 'pantalones',
            ]

        ]);
    }
}
