<div>
    <label for="{{ $name }}"
        class="mt-5 relative block rounded-md border border-gray-200 shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600">
        <input type="text" id="{{ $name }}"
            class="px-1.5 py-1.5 peer border-none bg-transparent placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0"
            placeholder="{{ $placeholder }}" name="{{ $name }}" value="{{ $value }}" />

        <span
            class="pointer-events-none absolute start-2.5 top-0 -translate-y-1/2 bg-white p-0.5 text-xs text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-0 peer-focus:text-xs">
            {{ $labelText }}
        </span>
    </label>

    @error($name)
        <p class="text-rose-500 mt-1">{{ $message }}</p>
    @enderror
</div>
