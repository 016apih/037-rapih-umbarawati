@props([
   'item' // [[name, label, value]]
])

<div class="row mb-3">
   <label for="{{ $item['name'] }}" class="col-sm-2 col-form-label">
      {{ $item['label'] }}
   </label>
   <div class="col-sm-10">
      <input type="text" name="{{ $item['name'] }}" class="form-control" id="{{ $item['name'] }}"
         @if($item['mode'] !== "create") value="{{ $item['value'] }}" @endif
         @if($item['mode'] == "detail" || $item['mode'] == "delete") readonly @endif
      >
   </div>
</div>
