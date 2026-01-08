<?php

namespace Database\Seeders;

use App\Models\Introduction;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IntroductionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Introduction::factory()->count(50)->create();
    }
}
