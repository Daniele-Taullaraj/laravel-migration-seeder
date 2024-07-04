<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $newTrain = new Train();
        $newTrain->Azienda = "Freccia Rossa";
        $newTrain->Stazione_partenza = "Firenze";
        $newTrain->Stazione_arrivo = "Napoli";
        $newTrain->Orario_partenza = 18;
        $newTrain->Orario_arrivo = 20;
        $newTrain->Codice_treno = "asdsa2e23";
        $newTrain->Numero_carrozze = "30";
        $newTrain->In_orario = "0";
        $newTrain->Cancellato = "1";
        $newTrain->save();
    }
}
