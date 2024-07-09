<button {{ $attributes->class(['bg-sky-600 text-white px-3 py-1 rounded-lg hover:bg-sky-500 hover:ring-4 hover:font-bold'])->merge(['type' => $type]) }}>
    {{ $slot }}
</button>