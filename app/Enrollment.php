<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Enrollment extends Model
{
    public static function enrolled(){
        return DB::table('enrollments')->join('sections', 'sections.id', 'enrollments.section_id')
                ->join('grade_levels', 'grade_levels.id', 'enrollments.grade_level')
                ->join('students', 'students.id', 'enrollments.student_id')
                ->join('school_years', 'school_years.id', 'enrollments.sy')
                ->select('students.*', 'grade_levels.grade_level', 'sections.section_name')
                ->get();
    }
}
