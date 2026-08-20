@props([
    'name',
    'label',
    'value' => null
])

<div class="form-group">

    <label for="{{ $name }}" class="form-label">
        {{ $label }}
    </label>

    <textarea
        name="{{ $name }}"
        id="{{ $name }}"
        class="form-control form-textarea"
        {{ $attributes }}
    >{{ old($name, $value) }}</textarea>

    @error($name)
        <p class="form-error">{{ $message }}</p>
    @enderror

</div>