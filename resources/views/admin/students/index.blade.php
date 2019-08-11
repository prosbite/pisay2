@extends('admin.app')


@section('content')

    <div class="card">
        <div class="card-header">
            Students List
            <a href="{{route('admin.student.create')}}" class="btn btn-primary btn-sm float-right">+Add Student</a>
            <select name="student-type" id="student-type" class="float-right" style="margin-right:5px;">
                <option value="1">Grade 7</option>
                <option value="1">Grade 8</option>
                <option value="1">Grade 9</option>
                <option value="1">Grade 10</option>
            </select>
        </div>
        <div class="card-body">
            <table class="table table-borderless">
                <thead>
                    <th>Student Name</th>
                    <th>Grade Level</th>
                    <th>Section</th>
                    <th style="text-align:right">Actions</th>
                </thead>
                <tbody>
                    <tr>
                        <td><a href="">Andrei A. Fortaliza</a></td>
                        <td>7</td>
                        <td>Proton</td>
                        <td>
                            <a href="" class="btn btn-danger btn-sm float-right">Delete</a>
                            <a href="" class="btn btn-success btn-sm float-right" style="margin-right:5px;">Edit</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

@stop