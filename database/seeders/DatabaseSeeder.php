<?php

namespace Database\Seeders;

use App\Models\Libros;
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
        
        Libros::factory(100)->create();
    }
}
