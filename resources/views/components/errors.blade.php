@if($errors)
    <ul>
        @foreach($errors->all() as $error)
            <li class="text-red-500 bold font-medium">{{$error}}</li>@endforeach
    </ul>
@endif
