@extends('admin.app')


@section('content')

<div class="card">
    <div class="card-header">
        Subjects List
        <a href="{{route('admin.subject.create')}}" class="btn btn-default btn-sm float-right">+Add New Subject</a>
    </div>
    <div class="card-body">
        @if(count($subjects) > 0)
            <table class="table table-borderless">
                <thead>
                    <th>Subject Name</th>
                    <th>Grade Level</th>
                    <th style="text-align:right">Actions</th>
                </thead>
                <tbody>
                    @foreach($subjects as $subject)
                        <tr>
                            <td>{{$subject->subject_name}}</td>
                            <td>{{$subject->grade_level}}</td>
                            <td>
                                <a href="{{route('admin.subject.delete',['id'=>$subject->id])}}" class="btn btn-danger btn-sm float-right">Delete</a>
                                <a href="" class="btn btn-success btn-sm float-right" style="margin-right:5px;">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <h4>No subjects found.</h4>
        @endif      
    </div>
</div>

@stop