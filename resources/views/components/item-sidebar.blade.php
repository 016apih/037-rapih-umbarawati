@props([
   'item' // [url, icon, title]
])

<a href="{{ route($item[0]) }}" class="nav-item nav-link {{ Request::routeIs($item[0]) ? 'active' : '' }}">
   <i class="{{ $item[1] }} me-2"></i>
   {{ $item[2] }}
</a>

