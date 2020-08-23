@if ($errors->any())
    <dic class="alert alert-danger">
        <ul class="m-0">
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </dic>
@endif