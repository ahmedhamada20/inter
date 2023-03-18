<?php

namespace Database\Seeders;

use App\Models\About;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        DB::table('abouts')->truncate();


        About::create([
            'image' => 'campus-1',
            'name' => $faker->name(),
            'notes' => $faker->paragraph(),
            'futhre_1' => $faker->name(),
            'futhre_2' => $faker->name(),
            'futhre_3' => $faker->name(),
            'futhre_4' => $faker->name(),
            'futhre_5' => $faker->name(),
            'futhre_6' => $faker->name(),
            'futhre_7' => $faker->name(),
            'futhre_8' => $faker->name(),
            'number_title_1' => $faker->name(),
            'number_1' => $faker->numberBetween(1, 30),
            'number_title_2' => $faker->name(),
            'number_2' => $faker->numberBetween(1, 30),
            'number_3' => $faker->numberBetween(1, 30),
            'number_title_3' =>  $faker->name(),
        ]);
    }
}
