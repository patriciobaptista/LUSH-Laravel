<?php

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
          'id' => null,
          'destination' => str::'Maldivas',
          'description' => str::'Lorem ipsum',
          'price' => 3499.99,
          'stay_length' => 10,
          'stock' => 5,
        ],
        [
          'id' => null,
          'destination' => 'Thailandia',
          'description' => 'Lorem ipsum',
          'price' => 6499.99,
          'stay_length' => 24,
          'stock' => 8,
        ],
        [
          'id' => null,
          'destination' => 'Costa Rica',
          'description' => 'Lorem ipsum',
          'price' => 2999.99,
          'stay_length' => 10,
          'stock' => 5,
        ],
        [
          'id' => null,
          'destination' => 'California',
          'description' => 'Lorem ipsum',
          'price' => 4999.99,
          'stay_length' => 14,
          'stock' => 5
        ],
        [
          'id' => null,
          'destination' => 'Miami',
          'description' => 'Lorem ipsum',
          'price' => 3499.99,
          'stay_length' => 14,
          'stock' => 3,
        ],
        [
          'id' => null,
          'destination' => 'Francia',
          'description' => 'Lorem ipsum',
          'price' => 4999.99,
          'stay_length' => 21,
          'stock' => 5,
        ]

      );
    }
}
