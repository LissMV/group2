<div>
    <label>{{ $slot }}</label>
    <input {{$attributes}} class="">

    @error($attributes['name'])
        <p>{{$message}}</p>
    @enderror
</div>
