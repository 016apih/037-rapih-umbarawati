@props([
   'href',
   'name',
])
<li class="nav-item">
   <a class="d-flex py-2 m-2 bg-light rounded-pill" data-bs-toggle="pill" href="{{ $href }}">
      <span class="text-dark" style="width: 130px;">{{ $name }}</span>
   </a>
</li>
