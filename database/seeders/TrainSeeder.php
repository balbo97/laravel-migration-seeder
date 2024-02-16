<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Faker\Provider\en_US\Address;
use Faker\Provider\en_US\Company;
use App\Models\Train;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 25; $i++) {
            $new_train = new Train();

            $new_train->azienda = $faker->company;
            $new_train->stazione_di_partenza = $faker->city;
            $new_train->stazione_di_arrivo = $faker->city;
            $new_train->orario_di_partenza = $faker->time;
            $new_train->orario_di_arrivo = $faker->time;
            $new_train->codice_treno = $faker->numberBetween(1000, 9999);
            $new_train->in_orario = $faker->boolean;
            $new_train->cancellato = $faker->boolean;

            $new_train->save();
        }
    }
}
