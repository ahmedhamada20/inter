<?php

namespace App\Console\Commands;

use App\Models\User;
use Faker\Factory;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class CreateMillionRecords extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:records';

    protected $description = 'Create 5 million records in the database';


    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // DB::table('users')->truncate();
        $faker = Factory::create();
        $bar = $this->output->createProgressBar(50000);


        for ($i = 0; $i < 50000; $i++) {
            User::create([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'password' => bcrypt('password'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            $bar->advance();
        }

        $bar->finish();
        $this->info("\nRecords generated successfully!");

        // $faker = Factory::create();

        // DB::disableQueryLog();
        // DB::beginTransaction();

        // DB::table('users')->truncate();
        // $batchSize = 10000;

        // for ($i = 0; $i < 5000000; $i += $batchSize) {
        //     $records = [];
        //     for ($j = 0; $j < $batchSize; $j++) {
        //         $records[] = [
        //             'name' => $faker->name,
        //             'email' => $faker->unique()->safeEmail,
        //             'password' => bcrypt('password'),
        //             'created_at' => now(),
        //             'updated_at' => now(),
        //         ];
        //     }

        //     DB::table('users')->insert($records);

        //     $this->info("Created {$batchSize} records");
        // }

        // DB::commit();
        // DB::enableQueryLog();
    }
}
