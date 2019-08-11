@extends('admin.app')


@section('content')

    <div class="card">
        <div class="card-header">
            Add New Subject
            
        </div>
        <div class="card-body">

            @include('include.auth_errors')

            <form action="{{route('admin.subject.store')}}" method="post" enctype="multipart/form-data" class="form">
                {{csrf_field()}}
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="label-dim" for="subject_name">Subject Name</label>
                            <input type="text" name="subject_name" id="subject_name" class="form-control">
                        </div>
                       
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="label-dim" for="gender">Choose Grade Level</label>
                            <select name="grade_level" id="grade_level" class="form-control">
                                @foreach($grade_levels as $gl)
                                    <option value="{{$gl->id}}">{{'Grade ' . $gl->grade_level}}</option>
                                @endforeach
                            </select>
                        </div>                     
                    </div>
                </div>
                <button class="btn btn-primary float-right" type="submit">Save Subject</button>
            </form>
        </div>
    </div>

@stop