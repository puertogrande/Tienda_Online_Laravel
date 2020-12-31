<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([

            [   
                'category_id' => 2,
                'name' => 'camiseta blanca',
                'price' => 22,
               
            ],
            [
                'category_id' => 2,
                'name' => 'camiseta negra especial',
                'price' => 33,
            ],
            [
                'category_id' => 3,
                'name' => 'pantalon vaquero',
                'price' => 43,
            ]

        ]);
    }
}
