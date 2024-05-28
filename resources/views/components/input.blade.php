<div>
    <label>{{ $slot }}</label>
    <input {{$attributes}}>
    @error($attributes['name'])
    <p>{{$message}}</p>
    @enderror
</div>
