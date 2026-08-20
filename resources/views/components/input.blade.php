@props([
    'name',
    'label',
    'type' => 'text',
    'value' => null
])

<div class="form-group">

    <label for="{{ $name }}" class="form-label">
        {{ $label }}
    </label>

    <input
        type="{{ $type }}"
        name="{{ $name }}"
        id="{{ $name }}"
        value="{{ old($name, $value) }}"
        class="form-control"
        {{ $attributes }}
    >

    @error($name)
        <p class="form-error">
            {{ $message }}
        </p>
    @enderror

</div>