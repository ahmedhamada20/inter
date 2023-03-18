<?php

namespace Database\Seeders;

use App\Models\Slider;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SliderSeeder extends Seeder
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
            Slider::create([
                'name' => $faker->name(),
                'notes' => $faker->paragraph(),
                'image' => 'banner-img1',
                'image_2' => 'thumb-1',
            ]);
        }
    }
}
