<?php

namespace Database\Seeders;

use App\Models\Puestos;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PuestosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Puestos::factory(100)->create();
    }
}
