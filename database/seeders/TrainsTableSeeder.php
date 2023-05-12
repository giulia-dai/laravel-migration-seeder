<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $azienda = ['Italo', 'Trenitalia', 'Freccia Rossa'];

        for ($i = 0; $i < 10; $i++) {
            $train = new Train();

            $partenze = $faker->dateTimeBetween('-1 week', '+1 week');
            $arrivi = $faker->dateTimeInInterval($partenze, '+1 days');
            $in_orario = $faker->boolean();

            if ($in_orario) {
                $cancellato = false;
            } else {
                $cancellato = $faker->boolean();
            }

            $train->Azienda = $faker->randomElement($azienda); //genera una parola random

            $train->Stazione_di_partenza =  $faker->city(); //paese random

            $train->Stazione_di_arrivo =  $faker->city();

            $train->Orario_di_partenza = $partenze;

            $train->Orario_di_arrivo = $arrivi;

            $train->Codice_treno = $faker->randomNumber(5, true); //se impostato su true genera una cifra composta da 5 numeri

            $train->Numero_carrozze = $faker->randomDigitNotNull(); //numero random da 1 a 9

            $train->In_orario = $in_orario;

            $train->Cancellato = $cancellato;



            $train->save();
        }
    }
}
