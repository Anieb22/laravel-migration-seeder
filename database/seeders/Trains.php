<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Train;

class Trains extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++){
        $newTrain = new Train();
        $newTrain->azienda = $faker->word();
        $newTrain->stazione_di_partenza = $faker->word();
        $newTrain->orario_di_partenza = $faker->time('H:i:s');
        $newTrain->stazione_di_arrivo = $faker->word();
        $newTrain->orario_di_arrivo = $faker->time('H:i:s');
        $newTrain->data_partenza = $faker->date('Y_m_d');
        $newTrain->data_arrivo = $faker->date('Y_m_d');
        $newTrain->n_carrozza = $faker->randomNumber(5, true);
        $newTrain->tempo_ritardo = $faker->randomNumber(3, true);
        $newTrain->in_orario = $faker->boolean();
        $newTrain->cancellato = $faker->boolean();


        $newTrain->save();
    }
    }
}
