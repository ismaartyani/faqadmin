<?php
use Faker\Generator as Faker;
use App\kategori;
// $factory->define(Model::class, function (Faker $faker) {
// $factory->define(\App\kategori::class, function (Faker\Generator $faker) {
$factory->define(App\kategori::class, function (Faker $faker){
    return [
      'nama' => $faker->name,
      'judul' => $faker->sentence,
      'konten' => $faker->text
    ];
});
