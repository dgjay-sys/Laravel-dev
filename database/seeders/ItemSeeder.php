<?php

namespace Database\Seeders;

use App\Models\items;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //        
        $faker = \Faker\Factory::create();
        items::create([
            'item_code' => $faker->word,
            'item_name' => $faker->name,
            'quantity' => $faker->numberBetween(0, 100),
            'status' =>  $faker->randomElement(["fine", "damage"]),
            'branch' => $faker->randomElement(["Chapter1", "Chapter2","Chapter3","Chapter4"]),
            'type' => $faker->randomElement(["Supply", "Equipment"]),
            'user_id' => 1
        ]);
    }
}
