<?php

use Illuminate\Database\Seeder;
use App\kategori;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(KategoriTableSeeder::class);
        $this->call([
          KategoriTableSeeder::class,
          KontakTableSeeder::class,
      ]);

      }
    }
