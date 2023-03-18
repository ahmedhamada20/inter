<?php

namespace Database\Seeders;

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
        $this->call([
            SliderSeeder::class,
            AcademicSeeder::class,
            AboutUsSeeder::class,
            HealthSeeder::class,
            AdmissionSeeder::class,
            PodcastSeeder::class,
            StoriesSeeder::class,
            NewsSeeder::class,
        ]);
    }
}
