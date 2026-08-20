@props([
    'name',
    'label',
    'options' => [],
    'value' => null,
    'placeholder' => null
])

<div class="form-group">

    <label for="{{ $name }}" class="form-label">
        {{ $label }}
    </label>

    <select
        name="{{ $name }}"
        id="{{ $name }}"
        {{ $attributes->merge(['class' => 'form-control']) }}
    >

        @if ($placeholder)
            <option value="">
                {{ $placeholder }}
            </option>
        @endif

        @foreach ($options as $optionValue => $optionLabel)

            <option
                value="{{ $optionValue }}"
                @selected(old($name, $value) == $optionValue)
            >
                {{ $optionLabel }}
            </option>

        @endforeach

    </select>

    @error($name)
        <p class="form-error">
            {{ $message }}
        </p>
    @enderror

</div>