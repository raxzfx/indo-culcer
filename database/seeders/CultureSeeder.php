<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Culture;

class CultureSeeder extends Seeder
{
    public function run()
    {
        Culture::factory()->count(30)->create();
    }
}
