@props(['titulo', 'tipo', 'nose'])
<div>
    <input name={{ $nose }} type={{ $tipo }}  placeholder={{ $titulo }}>
    @error($nose)
    <p>{{$message}}</p>
    @enderror
</div>
