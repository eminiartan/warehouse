<div>
    <input
        type="{{ $type }}"
        id="{{ $name }}"
        name="{{ $name }}"
        placeholder="{{ $label }}"
        autocomplete="off"
        class="w-full px-5 py-4 text-gray-800 placeholder:text-gray-800 placeholder:text-xs rounded-xl {{ $errors->has($name) ? 'border-2 border-red-900 focus:border-red-900 hover:border-red-900 focus:outline-none focus:ring-0' : 'border-gray-700 focus:border-blue-900 focus:ring-0 focus:outline-none border hover:border-blue-900' }}"
        value="{{ old($name, $value ? $value : '') }}"
        {{ $attributes }}
    >

    @error($name)
    @include('components.error')
    @enderror
</div>

