<?php

namespace Database\Seeders;

use App\Models\Proizvod;
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
        Prezentacija::truncate();
        Kategorija::truncate();
        Proizvod::truncate();
        User::truncate();

        User::factory(5)->create();
        Prezentacija::factory(5)->create();
        Kategorija::factory(5)->create();
        Proizvod::factory(5)->create();
        
        $user=User::factory()->create();
        $kategorija=Kategorija::factory()->create();

        Proizvod::factory(3)->create([
            'user_id'=>$user->id,
            'kategorija_id'=>$kategorija->id
        ]);
        //3 proizvoda za jednog korisnika i jednu kategoju

    //    $kor1= User::factory(1)->create();
    //    $kor2= User::factory(1)->create();
    //    $prez1= Prezentacija::create(['naziv'=>'Super sminka','mesto'=>'Beograd','trajanje'=>'75','url'=>'supersminka']);
    //    $prez2= Prezentacija::create(['naziv'=>'Najbolja nega za sjajnu kosu','mesto'=>'Ruma','trajanje'=>'90','url'=>'negakoze']);
    //    $prez3= Prezentacija::create(['naziv'=>'Za zdravu kozu','mesto'=>'Novi Sad','trajanje'=>'100','url'=>'negakose']);
    //    $kat1= Kategorija::create(['naziv'=>'Sminka','opis'=>'sminka','url'=>'sminka','prezentacija_id'=>$prez1->id]);
    //    $kat2=Kategorija::create(['naziv'=>'Kosa','opis'=>'kosa','url'=>'kosa','prezentacija_id'=>$prez2->id]);
    //    $kat3=Kategorija::create(['naziv'=>'Koza','opis'=>'koza','url'=>'koza','prezentacija_id'=>$prez3->id]);
      
        // $pr1 = Proizvod::create([
        //     'naziv'=>'Vodootporni ajlajner',
        //     'opis'=>'Za vase istaknute oci',
        //     'cena'=>'399',
        //     'rok'=>'24',
        //     'url'=>'vodootporniajlajner',
        //     'kategorija_id'=>$kat1->id ]);
        // $pr2 = Proizvod::create([
        //     'naziv'=>'Sampon za koprivom',
        //     'opis'=>'Najprodavaniji sampon za sjajnu kosu',
        //     'cena'=>'299',
        //     'rok'=>'14',
        //     'url'=>'samponsakoprivom',
        //     'kategorija_id'=>$kat2->id ]);
        //  $pr3 = Proizvod::create([
        //     'naziv'=>'Dnevna krema sa lavandom',
        //     'opis'=>'Za dnevnu negu vase koze',
        //     'cena'=>'799',
        //     'rok'=>'12',
        //     'url'=>'dnevnakremasalavandom',
        //     'kategorija_id'=>$kat3->id]);  
        //     $pr4 = Proizvod::create([
        //         'naziv'=>'Senke za oci',
        //         'opis'=>'Nezne nijanse',
        //         'cena'=>'899',
        //         'rok'=>'28',
        //         'url'=>'senkezaoci',
        //         'kategorija_id'=>$kat1->id ]);
        //      $pr5 = Proizvod::create([
        //             'naziv'=>'Regenerator za koprivom',
        //             'opis'=>'Za oporavak ostecene kose',
        //             'cena'=>'399',
        //             'rok'=>'14',
        //             'url'=>'regeneratorsakoprivom',
        //             'kategorija_id'=>$kat2->id ]);
        //             $pr6 = Proizvod::create([
        //                 'naziv'=>'Nocna sa lavandom',
        //                 'opis'=>'Za nocnu negu vase koze',
        //                 'cena'=>'899',
        //                 'rok'=>'12',
        //                 'url'=>'nocnakremasalavandom',
        //                 'kategorija_id'=>$kat3->id]); 
    }
}
