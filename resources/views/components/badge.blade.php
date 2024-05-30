@props([
   'item' // [type, title]
])

<span class="badge rounded-pill {{ $item['type'] }}">
   {{ $item['title'] }}
</span>

