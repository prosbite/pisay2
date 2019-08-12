<?php

use Illuminate\Database\Seeder;

class GradeLevelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=7; $i<=12; $i++){
            $gl = new \App\GradeLevel;
            $gl->grade_level = $i;
            $gl->save();
        }
    }
}
