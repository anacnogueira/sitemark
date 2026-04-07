@props(['name', 'label', 'prefix' => null])

<label class="form-control w-full">
    <div class="label">
        <span class="label-text text-paragraph-medium leading-paragraph-medium text-content-primary">
            {{ $label }}
        </span>
    </div>
    @if ($prefix)
        <span>{{ $prefix }}</span>
    @endif

    <input class="input w-full" name="{{ $name }}" {{ $attributes }} />
    @error($name)
        <div class="text-sm text-error">{{ $message }}</div>
    @enderror
</label>
