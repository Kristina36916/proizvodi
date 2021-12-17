<?php

namespace Database\Seeders;

use App\Models\Prezentacija;
use App\Models\User;
use App\Models\Kategorija;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       $user = User::factory(10)->create();
       $prez1= Prezentacija::create(['naziv'=>'Super sminka','mesto'=>'Beograd','trajanje'=>'75']);
       $prez2= Prezentacija::create(['naziv'=>'Najbolja nega za sjajnu kosu','mesto'=>'Ruma','trajanje'=>'90']);
       $prez3= Prezentacija::create(['naziv'=>'Za zdravu kozu','mesto'=>'Novi Sad','trajanje'=>'100']);
       $kat1= Kategorija::create(['naziv'=>'Sminka','opis'=>'sminka']);


    }
}
