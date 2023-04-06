<?php

namespace Database\Seeders;

use App\Models\Train;
use Faker\Generator as Faker;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i < 100; $i++){
            $new_train = new Train;

            $new_train->codice_treno = $faker->randomNumber(5, true);
            $new_train->azienda = $faker->randomElement(["Trenitalia", "Italo", "Trenord"]);
            $new_train->stazione_di_partenza = $faker->word();
            $new_train->stazione_di_arrivo = $faker->word();
            $new_train->orario_di_partenza = $faker->dateTimeInInterval('now', '+100 days');
            $new_train->orario_di_arrivo = $faker->dateTimeInInterval( $new_train->orario_di_partenza, '+100 days');
            $new_train->numero_carrozze = $faker->randomDigitNotNull();
            $new_train->in_orario = $faker->boolean();
            $new_train->cancellato = $faker->boolean();

            $new_train->save();

        };
    }
}
