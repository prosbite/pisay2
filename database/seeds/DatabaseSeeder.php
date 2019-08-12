<?php

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
        $this->call(UsersTableSeeder::class);
        $this->call(GradeLevelsTableSeeder::class);
        $this->call(QuartersTableSeeder::class);
        $this->call(SchoolYearsTableSeeder::class);
    }
}
