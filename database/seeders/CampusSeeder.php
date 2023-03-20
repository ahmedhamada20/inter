<?php

namespace Database\Seeders;

use App\Models\Campus;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CampusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        DB::table('sliders')->truncate();

        for ($i = 1; $i <= 3; $i++) {
            Campus::create([
                'name' => $faker->name(),
                'notes' => $faker->paragraph(),
                'image' => 'campus-life-2.jpg',
            ]);
        }
    }
}
