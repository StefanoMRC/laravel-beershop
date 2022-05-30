<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Beer;

class BeersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
       for($i=0; $i<10; $i++){

        $newBeer = new Beer();
            $newBeer->immagine = $faker->imageUrl(360, 360, 'food', true, 'beer', true, 'jpg');
            $newBeer->nome = $faker->word();
            $newBeer->prezzo = $faker->randomFloat(2, 3, 70 );
            $newBeer->catchphrase = $faker->sentence();
            $newBeer->tipologia = $faker->word();
            $newBeer->colorazione = $faker->colorName();
            $newBeer->filtrata = $faker->boolean();
            $newBeer->gradazione = $faker->numberBetween(5,12);
            $newBeer->confezione = $faker->word();
            $newBeer->litraggio = $faker->numberBetween(15,75);
            $newBeer->zona_produzione = $faker->city();
            $newBeer->prodotta_dal = $faker->year();
            $newBeer -> save();

       }
    }
}
