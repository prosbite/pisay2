<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Section extends Model
{
    public function sectionGradeLevel(){
        return DB::table('sections')
                    ->join('grade_levels', 'sections.grade_level_id', 'grade_levels.id')
                    ->select('sections.*', 'grade_levels.grade_level', 'grade_levels.id as gl_id')
                    ->orderBy('grade_levels.grade_level', 'ASC')
                    ->get();
    }

    public function gradeLevel(){
        $this->belongsTo('App\Section');
    }
}
