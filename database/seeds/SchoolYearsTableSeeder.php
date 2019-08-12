<?php

use Illuminate\Database\Seeder;

class SchoolYearsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sy = new \App\SchoolYear;
        $sy->start = date('Y');
        $sy->end = date('Y') + 1;
        $sy->active = 1;
        $sy->save();
    }
}
