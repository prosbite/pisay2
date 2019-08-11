@extends('admin.app')


@section('content')

<!-- Nav tabs -->
<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#home">Enrolled Students</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#menu1">Unenrolled Students</a>
  </li>
  <li class="nav-item">
    <a class="nav-link btn btn-default float-right"  href="{{route('admin.student.create')}}">+Add & Enroll</a>
  </li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
  <div class="tab-pane active" id="home">
    <div class="card">
        <div class="card-header">
            
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
  </div>
  <div class="tab-pane container fade" id="menu1">tab2</div>
</div>

@stop