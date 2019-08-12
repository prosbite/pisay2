<?php

use Illuminate\Database\Seeder;

class QuartersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $quarters = ['First Quarter', 'Second Quarter'];
        foreach($quarters as $key=>$value){
            $quarter = new \App\Quarter;
            $quarter->quarter = $key + 1;
            $quarter->alias = $value;
            $quarter->active = 0;

            if($key == 0){
                $quarter->active = 1;
            }
            $quarter->save();
        }
    }
}
