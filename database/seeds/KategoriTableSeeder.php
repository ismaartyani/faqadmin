<?php

use Illuminate\Database\Seeder;

class KategoriTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // factory(kategori::class, 40)->create();
        // factory(App\kategori::class, 20)->create();
      $factory = factory(\App\kategori::class, 10)->create();
       }
   }
