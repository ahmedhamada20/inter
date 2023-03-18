<?php

namespace Database\Seeders;

use App\Models\Stories;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StoriesSeeder extends Seeder
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
            Stories::create([
                'name' => $faker->name(),
                'url' => $faker->url(),
              
            ]);
        }
    }
}
