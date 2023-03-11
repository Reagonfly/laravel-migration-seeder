<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Train;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 50; $i++) {
            Train::create([
                'company' => $faker->company,
                'departure_station' => $faker->city,
                'arrival_station' => $faker->city,
                'departure_time' => $faker->dateTimeThisYear(),
                'arrival_time' => $faker->dateTimeThisYear(),
                'train_code' => $faker->unique()->regexify('[A-Z]{3}[0-9]{3}'),
                'carriages_number' => $faker->numberBetween(4, 20),
                'on_time' => $faker->boolean,
                'canceled' => $faker->boolean(10),
            ]);
        }
    }
}
