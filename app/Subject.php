<?php

namespace App;
use DB;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    public function subjectGradeLevel(){
        return DB::table('subjects')
                    ->join('grade_levels', 'subjects.grade_level', 'grade_levels.id')
                    ->select('subjects.*', 'grade_levels.grade_level', 'grade_levels.id as gl_id')
                    ->orderBy('grade_levels.grade_level', 'ASC')
                    ->get();
    }
}
