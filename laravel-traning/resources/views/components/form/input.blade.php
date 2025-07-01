<div class="mb-3">
    @if($label)
        <label for="{{ $name }}" class="form-label">{{ $label }}</label>
    @endif

    <input
            type="{{ $type }}"
            id="{{ $name }}"
            name="{{ $name }}"
            placeholder="{{ $placeholder }}"
            class="form-control"
            value="{{ old($name) }}"
    >
    {{$slot}}
        @error($name)
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
</div>
