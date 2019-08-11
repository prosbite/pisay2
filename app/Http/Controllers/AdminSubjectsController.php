<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject;

class AdminSubjectsController extends Controller
{
    
    public function index()
    {
        $subjects = (new Subject())->subjectGradeLevel();
        return view('admin.subjects.index')->with(['nav'=>'subjects', 'subjects'=>$subjects]);
    }

   
    public function create()
    {
        $gl = \App\GradeLevel::all();
        return view('admin.subjects.create')->with(['nav'=>'subjects', 'grade_levels'=>$gl]);
    }

   
    public function store(Request $request)
    {
        $this->validate($request, [
            'subject_name' => 'required',
            'grade_level' => 'required'
        ]);
        $subject = new Subject;
        $subject->subject_name = $request->subject_name;
        $subject->grade_level = $request->grade_level;
        $subject->save();

        return redirect(route('admin.subjects'));
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        Subject::where('id',$id)->delete();
        return redirect(route('admin.subjects'));
    }
}
