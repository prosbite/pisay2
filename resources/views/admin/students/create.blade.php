@extends('admin.app')


@section('content')

    <div class="card" id="mainContent">
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
                            <label class="label-dim" for="firstname"><span class="text-danger">*</span> First Name</label>
                            <input type="text" name="firstname" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label class="label-dim" for="middlename"><span class="text-danger">*</span> Middle Name</label>
                            <input type="text" name="middlename" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label class="label-dim" for="lastname"><span class="text-danger">*</span> Last Name</label>
                            <input type="text" name="lastname" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label class="label-dim" for="email">Email Address</label>
                            <input type="text" name="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="label-dim" for="grade_levels" id="gl_label" ><span class="text-danger">*</span> Select Grade Level</label>
                            <select @change="getSections()" name="grade_levels" id="grade_levels" class="form-control" v-model="gradeLevels.current" required>
                               <option v-for="gl in gradeLevels.all" :value="gl.id">Grade @{{gl.grade_level}}</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="label-dim" for="gender"><span class="text-danger">*</span> Gender</label>
                            <select name="gender" id="gender" class="form-control" required>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="label-dim" for="address">Home Address</label>
                            <input type="text" name="address" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="label-dim" for="birthdate"><span class="text-danger">*</span> Birthdate</label>
                            <input type="date" name="birthdate" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label class="label-dim" for="contact_no">Contact Number</label>
                            <input type="text" name="contact_no" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="label-dim" for="sections"><span class="text-danger">*</span> Select Section</label>
                            <select name="sections" id="sections" class="form-control" required>
                                <option v-for="section in sections.all" :value="section.id">@{{section.section_name}}</option>
                            </select>
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary float-right" type="submit">Save Student</button>
            </form>
        </div>
    </div>

@stop


@section('js')

    <script>
            
    new Vue({
        el: '#mainContent',
        data: {
            sections:{current:{}, all:[]},
            gradeLevels:{current:{}, all:[]},
            sample:'hello'
        },
        methods: {
            init:function(){
                $.get("{{route('admin.student.init')}}", function(data){
                    this.sections.all = data.sections;
                    if(data.sections.length > 0){
                        this.sections.current = data.sections[0];
                    }
                    this.gradeLevels.all = data.grade_levels;
                    if(data.grade_levels.length > 0){
                        this.gradeLevels.current = data.grade_levels[0].id;
                    }
                    // console.log(this.gradeLevels.all);
                }.bind(this));
            },

            isSelected:function(gl){
                if(gl.id == this.gradeLevels.current){
                    return "selected";
                }
                return "";
            },

            getSections:function(){
                $.get("{{route('admin.student.sections')}}", {gl:this.gradeLevels.current}, function(data){
                    this.sections.all = data;
                    console.log(this.sections.all);
                }.bind(this));
            },
        },

        mounted(){
            this.init();
        }
    });
    </script>

@stop