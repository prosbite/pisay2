@if($errors->any())

    <ul class="list-group alert alert-danger">
        @foreach($errors->all() as $error)
            <li class="list-group-item text-danger">
                {{$error}}
            </li>
        @endforeach
    </ul>

@endif