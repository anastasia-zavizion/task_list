@if(session('success'))
    <div x-show="open" x-data="{ open: true }" class="mt-2 mb-2 bg-green-500 p-2 text-white relative" role="alert">
        <span  @click="open = false" class="absolute top-0 right-2 cursor-pointer">X</span>
        {{session('success')}}
    </div>
@endif
