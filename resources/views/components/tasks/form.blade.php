<form method="POST" action="{{$action}}">
    @csrf
    @if($method === 'PUT')
    @method('PUT')
    @endif
    <div class="form-div">
        <label class="label" for="title">Title</label>
        <input class="form-input" value="{{$task->title ?? old('title') }}" id="title" name="title" type="text">
    </div>
    <div class="form-div">
        <label class="label" for="description">Description</label>
        <textarea  class="form-input"   id="description" name="description" rows="2">{{$task->description ?? old('description')}}</textarea>
    </div>
    <div class="form-div">
        <label class="label"  for="long_description">Long Description</label>
        <textarea  class="form-input"  id="long_description" name="long_description" rows="4">{{$task->long_description ?? old('long_description')}}</textarea>
    </div>
    <div class="form-div">
        <button class="base-btn" type="submit">@if($method === 'POST')Add @else Update @endif task</button>
    </div>
</form>
