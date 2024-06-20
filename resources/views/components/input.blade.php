<div class="pb-4">
    <label class="block text-base mb-2" >{{ $slot }}</label>
    <input class="border-b w-full" style="background-color: transparent;" {{$attributes}}>

    @error($attributes['name'])
        <p>{{$message}}</p>
    @enderror
</div>
