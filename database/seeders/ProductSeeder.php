<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory;
use Faker\Factory as Faker;

 class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
  public function run()
    {

        $faker = Faker::create('id_ID');
        for($i = 1; $i <= 300; $i++){

             DB::table('products')->insert([
                'name' => $faker->city,
                'qty' => $faker->numberBetween($min = 1, $max = 100),
                'price' => $faker->numberBetween($min = 500, $max = 8000),
                'total_price' => $faker->numberBetween($min = 0, $max = 99999),
                'description'=> $faker->paragraph($nb =8),
                'created_at' =>date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ]);
        }
    }
}