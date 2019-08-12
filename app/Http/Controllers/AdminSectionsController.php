<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Section;

class AdminSectionsController extends Controller
{
    public function index()
    {
        $sections = (new Section())->sectionGradeLevel();
        return view('admin.sections.index')->with(['nav'=>'sections', 'sections'=>$sections]);
    }

   
    public function create()
    {
        $gl = \App\GradeLevel::all();
        return view('admin.sections.create')->with(['nav'=>'sections', 'grade_levels'=>$gl]);
    }

   
    public function store(Request $request)
    {
        $this->validate($request, [
            'section_name' => 'required',
            'grade_level' => 'required'
        ]);
        $section = new Section;
        $section->section_name = $request->section_name;
        $section->grade_level_id = $request->grade_level;
        $section->save();

        return redirect(route('admin.sections'));
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
        Section::where('id',$id)->delete();
        return redirect(route('admin.sections'));
    }
}
