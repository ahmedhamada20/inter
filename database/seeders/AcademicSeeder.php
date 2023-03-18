<?php

namespace Database\Seeders;

use App\Models\Academic;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AcademicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        DB::table('academics')->truncate();

        for ($i = 1; $i <= 3; $i++) {
            Academic::create([
                'name' => $faker->name(),
                'notes' => $faker->paragraph(),
            ]);
        }
    }
}
