@props([
   'item', // [[mode, name, label, value, options, disabled:[field, value]]]
])

<div class="row mb-3">
   <label for="{{ $item['name']}}" class="col-sm-2 col-form-label">
      {{ $item['label'] }}
   </label>
   <div class="col-sm-10">
      <select
         class="form-select"
         aria-label="Default select example"
         name="{{ $item['name'] }}"
         @if($item['mode'] == "detail" || $item['mode'] == "delete") disabled @endif
         
      >
         <option @if ($item['value'] == "") selected @endif >
            Open this select {{ $item['label'] }}
         </option>
         @foreach ($item['options'] as $option)
            <option
               value="{{ $option->id }}"
               @if($item['value'] == $option->id) selected @endif
               @if(isset($item['disabled']) && ($option->status == $item['disabled'][1])) disabled @endif
            >
               {{ $option->name ?? $option->title ?? $option->username }}
            </option>
         @endforeach
         </select>
   </div>
</div>


