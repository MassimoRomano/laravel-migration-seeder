<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;


class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 5; $i++) {
            $train = new Train();
            $train->company = $faker->randomElement(['Italo', 'Trenitalia']);
            $train->departure_station = $faker->city();
            $train->arrival_station = $faker->city();
            $train->departure_time = $faker->time('H:i:s', '10:00:00');
            $train->arrival_time = $faker->time('H:i:s', '23:59:59');
            $train->train_code = $faker->bothify('??##');
            $train->number_of_carriages = $faker->numberBetween(0, 20);
            $train->on_time = $faker->boolean();
            $train->cancelled = $faker->boolean();
            $train->save();
        }

        if (!$train->cancelled) {
            // Genera casualmente un ritardo in minuti 
            $delayMinutes = rand(0, 30);
            $train->on_time = $delayMinutes;
        } else {
            $train->on_time = 'Cancellato';
        }
    }
}
