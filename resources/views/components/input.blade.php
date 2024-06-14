<div class="pb-4">
    <label class="block text-base mb-2" >{{ $slot }}</label>
    <input class="border-b w-full width: 100px height: 100px">

    @error($attributes['name'])
        <p>{{$message}}</p>
    @enderror
</div>
