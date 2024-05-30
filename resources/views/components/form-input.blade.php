@props([
   'item', // [[mode, name, label, value]]
])

<div class="row mb-3">
   <label for="{{ $item['name']}}" class="col-sm-2 col-form-label">
      {{ $item['label'] }}
   </label>
   <div class="col-sm-10">
      <input name="{{ $item['name'] }}" class="form-control" id="{{ $item['name'] }}"
         type="{{ $item['type'] ?? 'text' }}"
         value="{{ $item['value'] }}"
         @if($item['mode'] == "detail" || $item['mode'] == "delete") readonly @endif
      >
   </div>
</div>
