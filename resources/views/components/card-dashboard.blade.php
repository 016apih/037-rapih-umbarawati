@props([
   'card'
])
<div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
   <i class="{{ $card[0] }} fa-3x text-primary"></i>
   <div class="ms-3">
      <p class="mb-2">{{ $card[1] }}</p>
      <h6 class="mb-0">{{ $card[2] }}</h6>
   </div>
</div>
