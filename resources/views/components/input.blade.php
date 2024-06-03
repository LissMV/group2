<div>
    <label>{{ $slot }}</label>
    <input style="background: #BDBBBA " class="border-neutral-950 border solid-xl px-4 py-1.5" {{$attributes}} class="">

    @error($attributes['name'])
        <p>{{$message}}</p>
    @enderror
</div>
