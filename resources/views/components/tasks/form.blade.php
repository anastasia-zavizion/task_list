<form method="POST" action="{{$action}}">
    @csrf
    @method('PUT')
    <div>
        <label for="title">Title</label>
        <input value="{{$task->title ?? old('title') }}" id="title" name="title" type="text">
    </div>

    <div>
        <label for="description">Description</label>
        <textarea id="description" name="description" rows="2">{{$task->description ?? old('description')}}</textarea>
    </div>

    <div>
        <label for="long_description">Long Description</label>
        <textarea id="long_description" name="long_description" rows="4">{{$task->long_description ?? old('long_description')}}</textarea>
    </div>

    <div>
        <button type="submit">@if($method === 'POST')Add @else Update @endif task</button>
    </div>
</form>
