<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $faker = \Faker\Factory::create();
        
        for($i=0;$i<10;$i++){

     $car = new Project;
     $car->name=$faker->name();
            $car->price=$faker->numberBetween(100000,1000000000);
            $car->engine_type=$faker->word();
            $car->car_id=$faker->uuid();
            $car->transmission=$faker->word();
            $car->fuel_type=$faker->word();
            $car->type_id=$faker->numberBetween(1,50);
            $car->make_id=$faker->numberBetween(1,8);
            $car->condition=$faker->randomElement(['Brand New',
            'Slightly Used',
            'Used']);
            $car->exterior_color=$faker->colorName();
            $car->interior_color=$faker->colorName();
            $car->vin=$faker->uuid();
            $car->stars=$faker->numberBetween(0,5);
            $car->type=$faker->randomElement(['new','used']);
            $car->car_location=$faker->randomElement(['Lagos','Ogun']);
            $car->distance_used_for=$faker->numberBetween(0,10000).' mi';
            $car->distress=$faker->boolean();
            $car->model=$faker->word();
            $car->user_id=1;
            $car->approved=$faker->boolean();
            $car->sold=false;
            $car->save();
        }
    }
}
