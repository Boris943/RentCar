<?php

use App\Vehicle;
use Faker\Generator as Faker;

$factory->define(Vehicle::class, function (Faker $faker) {
    return [
       'ac'=>true,
       'luggage'=>$faker->randomNumber(),
       'booked'=>false,
       'doors'=>$faker->randomNumber(),
       'fuel'=>'Dizel',
       'price'=>23,
       'seats'=>$faker->randomNumber(),
       'transmission'=>'manual',
       'car_name'=>'toyota',
       'type'=>'sports' ,
       'car_photo'=>'c://'
    ];
});
