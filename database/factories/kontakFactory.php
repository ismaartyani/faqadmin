<?php

use Faker\Generator as Faker;
use App\kontak;
// $factory->define(Model::class, function (Faker $faker) {
$factory->define(App\kontak::class, function (Faker $faker){
    return [
      'alamat' => $faker->address,
      'no_tlp' => $faker->PhoneNumber,
      'email' => $faker->email
    ];
});
