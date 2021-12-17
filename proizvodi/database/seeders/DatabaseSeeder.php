<?php

namespace Database\Seeders;

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
       $kat1=Kategorija::create(['naziv'=>'Sminka','opis'=>'sminka']);


    }
}
