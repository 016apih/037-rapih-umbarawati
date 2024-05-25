@props([
   'item', // [[mode, name, label, value]]
])

<div class="row mb-3">
   <label for="{{ $item['name']}}" class="col-sm-2 col-form-label">
      {{ $item['label'] }}
   </label>
   <div class="col-sm-10">
      <textarea name="{{ $item['name']}}" class="form-control px-0" placeholder="Address" id={{ $item['name']}} style="height: 150px;"
         @if($item['mode'] == "detail" || $item['mode'] == "delete") readonly @endif
      >
      {{ $item['value'] }}
      </textarea>
   </div>
</div>
