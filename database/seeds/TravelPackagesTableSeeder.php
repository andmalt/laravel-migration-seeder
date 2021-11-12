<?php

use Illuminate\Database\Seeder;
use App\Models\TravelPackage;
use Facade\Ignition\Support\Packagist\Package;
use Faker\Generator as Faker;

class TravelPackagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        /* $travelPackages = [
            [
                'name'=>'Test Hotel',
                'locality'=>'Velletri, RM, Italy',
                'date_from'=>'2021-9-21',
                'date_to'=>'2021-9-25',
                'guests'=> 2,
                'rooms'=> 1,
                'amenities'=>'pool, bar, restaurant',
                'rating'=> 4.8 ,
                'description'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cumque illum facere assumenda atque in, nostrum ipsa! Rem sed, ipsum voluptatibus, dolore maxime fugit libero ex, esse ipsam sint odit similique!',
                'price'=> 100.00
            ],
            [
                'name'=>'Q Hotel',
                'locality'=>'Velletri, RM, Italy',
                'date_from'=>'2021-9-21',
                'date_to'=>'2021-9-25',
                'guests'=> 4,
                'rooms'=> 2,
                'amenities'=>'pool, bar, restaurant',
                'rating'=> 4.8 ,
                'description'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cumque illum facere assumenda atque in, nostrum ipsa! Rem sed, ipsum voluptatibus, dolore maxime fugit libero ex, esse ipsam sint odit similique!',
                'price'=>290.50
            ],
            [
                'name'=>'M Hotel',
                'locality'=>'Velletri, RM, Italy',
                'date_from'=>'2021-9-21',
                'date_to'=>'2021-9-25',
                'guests'=> 3,
                'rooms'=> 1,
                'amenities'=>'pool, bar, restaurant',
                'rating'=> 4.3 ,
                'description'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cumque illum facere assumenda atque in, nostrum ipsa! Rem sed, ipsum voluptatibus, dolore maxime fugit libero ex, esse ipsam sint odit similique!',
                'price'=>370.00
            ]
        ]; */

        /* foreach($travelPackages as $package){
            $newPackage = new TravelPackage(); */

            // manual method

           /*  $newPackage->name = $package['name'];
            $newPackage->locality = $package['locality'];
            $newPackage->date_from = $package['date_from'];
            $newPackage->date_to = $package['date_to'];
            $newPackage->guests = $package['guests'];
            $newPackage->rooms = $package['rooms'];
            $newPackage->amenities = $package['amenities'];
            $newPackage->rating = $package['rating'];
            $newPackage->description = $package['description'];
            $newPackage->price = $package['price']; */

            
            // fillable method

       /*      $newPackage->fill($package);
            $newPackage->save();
        } */

        // insert fakerphp

        for($i = 0; $i < 50; $i++){
            $newPackage = new TravelPackage();
            $newPackage->name = $faker->secondaryAddress();
            $newPackage->locality = $faker->address();
            $newPackage->date_from = $faker->date('Y_m_d');
            $newPackage->date_to = $faker->date('Y_m_d');
            $newPackage->guests = $faker->randomDigit();
            $newPackage->rooms = $faker->randomDigit();
            $newPackage->amenities = $faker->word();
            $newPackage->rating = $faker->randomFloat(1,0,5);
            $newPackage->description = $faker->words(10, true);
            $newPackage->price = $faker->randomFloat(2,1,9999);
            $newPackage->save();
        }
    }
}
