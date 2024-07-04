<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        // imposto io i dati
        // $newTrain = new Train();
        // $newTrain->Azienda = "Freccia Rossa";
        // $newTrain->Stazione_partenza = "Firenze";
        // $newTrain->Stazione_arrivo = "Napoli";
        // $newTrain->Orario_partenza = 18;
        // $newTrain->Orario_arrivo = 20;
        // $newTrain->Codice_treno = "asdsa2e23";
        // $newTrain->Numero_carrozze = "30";
        // $newTrain->In_orario = "0";
        // $newTrain->Cancellato = "1";
        // $newTrain->save();

        // dati a caso generati da faker
        $newTrain = new Train();
        $newTrain->Azienda = $faker->company();
        $newTrain->Stazione_partenza = $faker->city();
        $newTrain->Stazione_arrivo = $faker->city();
        $newTrain->Orario_partenza = $faker->time();
        $newTrain->Orario_arrivo = $faker->time();
        $newTrain->Codice_treno = $faker->ean8();
        $newTrain->Numero_carrozze = $faker->numberBetween(1, 50);
        $newTrain->In_orario =  $faker->numberBetween(0, 1);
        $newTrain->Cancellato =  $faker->numberBetween(0, 1);
        $newTrain->save();
    }
}
