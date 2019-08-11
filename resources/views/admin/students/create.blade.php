@extends('admin.app')


@section('content')

    <div class="card">
        <div class="card-header">
            Add New Student
            
        </div>
        <div class="card-body">
            @include('include.auth_errors')
            <form action="{{route('admin.student.store')}}" method="post" enctype="multipart/form-data" class="form">
                {{csrf_field()}}
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="label-dim" for="firstname">First Name</label>
                            <input type="text" name="firstname" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="label-dim" for="middlename">Middle Name</label>
                            <input type="text" name="middlename" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="label-dim" for="lastname">Last Name</label>
                            <input type="text" name="lastname" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="label-dim" for="email">Email Address</label>
                            <input type="text" name="email" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="label-dim" for="gender">Gender</label>
                            <select name="gender" id="gender" class="form-control">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="label-dim" for="address">Home Address</label>
                            <input type="text" name="address" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="label-dim" for="birthdate">Birthdate</label>
                            <input type="date" name="birthdate" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="label-dim" for="contact_no">Contact Number</label>
                            <input type="text" name="contact_no" class="form-control">
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary float-right" type="submit">Save Student</button>
            </form>
        </div>
    </div>

@stop