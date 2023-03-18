<?php

namespace Database\Seeders;

use App\Models\Admission;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdmissionSeeder extends Seeder
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


        Admission::create([
            'notes_1' => $faker->name(),
            'notes_2' => $faker->name(),
            'image' => 'admission-1',
            'url' => $faker->url(),
        ]);
    }
}
