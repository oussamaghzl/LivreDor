<?php

namespace Database\Seeders;

use App\Models\LivreOr;
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
        LivreOr::factory(10)->create();
    }
}
