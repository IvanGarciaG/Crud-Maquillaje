<?php

namespace Database\Seeders;

use App\Models\Makeup;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MakeupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Makeup::factory()->count(10)->create();
    }
}
