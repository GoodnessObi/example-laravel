@props(['name'])


@error($name)
<small class="text-red-500 text-semibold">
  {{$message}}
</small>
@enderror
