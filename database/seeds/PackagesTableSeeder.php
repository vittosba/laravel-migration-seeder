<?php

use Illuminate\Database\Seeder;
use App\Package;

use Faker\Generator as Faker;

class PackagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 12; $i++) { 
            $new_package = new Package();

            $new_package->destination = $faker->word();
            $new_package->description = $faker->paragraph();
            $new_package->days_number = rand(3, 7);
            $new_package->cost = rand(300, 1000);

            $new_package->save();
        }
    }
}
