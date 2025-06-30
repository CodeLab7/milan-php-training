<div class="mb-3">
    @if($label)
        <label for="{{ $name }}" class="form-label fw-bold">{{ $label }}</label>
    @endif

    <input
            type="{{ $type }}"
            id="{{ $name }}"
            name="{{ $name }}"
            class="form-control @error($name) is-invalid @enderror"
            placeholder="{{ $placeholder }}"
            value="{{ old($name) }}"
    >

    @error($name)
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
