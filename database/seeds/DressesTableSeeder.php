<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Dress;

class DressesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run(faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $newDress = new Dress();

            $newDress -> name = $faker -> name();
            $newDress -> color = $faker -> colorName();
            $newDress -> size = $faker -> randomElement(['XXS', 'XS', 'S', 'M', 'L', 'XL', 'XXL']);
            $newDress -> description = $faker -> paragraph();
            $newDress -> price = $faker -> randomFloat(2, 10, 9999);
            $newDress -> season = $faker -> randomElement(['Estivo', 'Autunnale', 'Primaverile', 'Invernale']);

            $newDress -> save();
        }

    }
    
     /* public function run()
    {
        $dresses = config('dresses');

        foreach ($dresses as $dress) {
            $newDress = new Dress();

            $newDress -> name = $dress['name'];
            $newDress -> color = $dress['color'];
            $newDress -> size = $dress['size'];
            $newDress -> description = $dress['description'];
            $newDress -> price = $dress['price'];
            $newDress -> season = $dress['season'];

            $newDress -> save();
        }
    } */
}
