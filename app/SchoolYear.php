<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SchoolYear extends Model
{
    public static function sy(){
        return self::where('active', 1)->first();
    }
}
