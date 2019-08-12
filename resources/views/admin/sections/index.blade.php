@extends('admin.app')


@section('content')

<div class="card">
    <div class="card-header">
        Sections List
        <a href="{{route('admin.section.create')}}" class="btn btn-default btn-sm float-right">+Add New Section</a>
    </div>
    <div class="card-body">
        @if(count($sections) > 0)
            <table class="table table-borderless">
                <thead>
                    <th>Section Name</th>
                    <th>Grade Level</th>
                    <th style="text-align:right">Actions</th>
                </thead>
                <tbody>
                    @foreach($sections as $section)
                        <tr>
                            <td>{{$section->section_name}}</td>
                            <td>{{$section->grade_level_id}}</td>
                            <td>
                                <a href="{{route('admin.section.delete',['id'=>$section->id])}}" class="btn btn-danger btn-sm float-right">Delete</a>
                                <a href="" class="btn btn-success btn-sm float-right" style="margin-right:5px;">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <h4>No sections found.</h4>
        @endif      
    </div>
</div>

@stop