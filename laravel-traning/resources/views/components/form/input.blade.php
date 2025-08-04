<div class="form-group ">
    @if($label)
        <label class="form-label">{{ $label }}</label>
    @endif

    <input {{$attributes->merge(['class' => 'form-control'])}} />

    {{ $slot }}
    @error($attributes->get('name'))
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
