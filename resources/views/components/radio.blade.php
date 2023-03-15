<label class="flex items-center space-x-2">
    <input name="{{ $name }}" class="focus:ring-red-900 h-5 w-5 text-red-900 border-gray-300 {{ $errors->has($name) ? 'is-invalid' : '' }}" type="radio" {{ $attributes }}>
    <span>{{ $label }}</span>

    @error($name)
    @include('components.error')
    @enderror
</label>
