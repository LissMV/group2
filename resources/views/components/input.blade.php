<div class="pb-4">
    <label class="block text-base mb-2" >{{ $slot }}</label>
    <input class="border-b w-full border-amber-950 focus:ring-0 focus:outline-none font-montserrat" style="background-color: transparent;" {{$attributes}}>

    @error($attributes['name'])
        <p class="font-montserrat">{{$message}}</p>
    @enderror
</div>
