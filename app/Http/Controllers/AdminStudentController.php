<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Student;
use App\Enrollment;

class AdminStudentController extends Controller
{
    
    public function index()
    {
        return view('admin.students.index')->with(['nav'=>'students', 'students'=>\App\Enrollment::enrolled()]);
    }

   
    public function create()
    {
        $sections = \App\Section::all();
        $subjects = \App\Subject::all();

        if($sections->count() == 0 || $subjects->count() == 0){
            Session::flash('info', 'There are no subjects or section yet.');
            return redirect()->back();
        }
        return view('admin.students.create')->with([
            'nav' => 'students',
            'sections' => $sections,
            'subjects' => $subjects
        ]);
    }

  
    public function store(Request $request)
    {
        $sy = \App\SchoolYear::where('active', 1)->first();   
        // dd($sy->id);     
        $this->validate($request, [
            'firstname' => 'required',
            'middlename' => 'required',
            'lastname' => 'required',
            'gender' => 'required',
            'birthdate' => 'required'
        ]);
        $request = (object) $this->fillNull($request->all());
        $student = new Student;
        $student->firstname = $request->firstname;
        $student->middlename = $request->middlename;
        $student->lastname = $request->lastname;
        $student->gender = $request->gender;
        $student->birthdate = $request->birthdate;
        $student->email = $request->email;
        $student->address = $request->address;
        $student->contact_no = $request->contact_no;

        if($student->save()){
            $enrollment = new Enrollment;
            $enrollment->student_id = $student->id;
            $enrollment->section_id = $request->sections;
            $enrollment->grade_level = $request->grade_levels;
            $enrollment->sy = $sy->id;
            if($enrollment->save()){
                Session::flash('success', 'A new student has been added successfully!');
                return redirect(route('admin.students'));
            }
        }

        Session:flash('danger', 'Something went wrong, please try again.');
        return redirect(route('admin.student.create'));
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
        //
    }

    public function init(){
        $gradeLevels = \App\GradeLevel::all();
        if(count($gradeLevels) > 0){
            return ['grade_levels'=>$gradeLevels, 
            'sections'=>\App\GradeLevel::find($gradeLevels[0]->id)->sections()->get()];
        }
        return ['grade_levels'=>$gradeLevels, 
            'sections'=>[]];       
    }

    public function sections(Request $request){
        return \App\GradeLevel::find($request->gl)->sections()->get();
    }

    public function fillNull($request){
        foreach($request as $index=>$value){
            if($value == null){
                $request[$index] = "";
            }
        }
        return $request;
    }
    
}
