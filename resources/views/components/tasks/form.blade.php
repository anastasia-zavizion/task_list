<form method="POST" action="{{$action}}">
    @csrf
    @if($method === 'PUT')
    @method('PUT')
    @endif
    <div class="mt-2 mb-2">
        <label class="block bold text-gray-500" for="title">Title</label>
        <input class="block border border-gray-500 w-full p-2" value="{{$task->title ?? old('title') }}" id="title" name="title" type="text">
    </div>

    <div class="mt-2 mb-2">
        <label class="block bold text-gray-500" for="description">Description</label>
        <textarea  class="block border border-gray-500 w-full p-2"   id="description" name="description" rows="2">{{$task->description ?? old('description')}}</textarea>
    </div>

    <div class="mt-2 mb-2">
        <label class="block bold text-gray-500"  for="long_description">Long Description</label>
        <textarea  class="block border border-gray-500 w-full p-2"  id="long_description" name="long_description" rows="4">{{$task->long_description ?? old('long_description')}}</textarea>
    </div>

    <div class="mt-2 mb-2">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded inline-block" type="submit">@if($method === 'POST')Add @else Update @endif task</button>
    </div>
</form>
