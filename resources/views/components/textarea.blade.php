@props(['name', 'label'])

<label class="form-control w-full">
    <div class="label">
        <span class="label-text text-paragraph-medium leading-paragraph-medium text-content-primary">
            {{ $label }}
        </span>
    </div>
    <textarea {{ $attributes }} name="{{ $name }}" class="textarea w-full">{{ $slot }}</textarea>
    @error($name)
        <span>{{ $message }}</span>
    @enderror
</label>
