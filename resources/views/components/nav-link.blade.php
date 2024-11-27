@props(['active' => false, 'type' => 'a'])

@if ($type === 'a')

    <a class="{{ $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:text-white' }}rounded rounded-md px-3 py-2 text-base font-medium text-white"
    aria-current = "{{ $active ? 'page' : 'false' }}" {{ $attributes }}>{{ $slot }}</a>
    
@else

    <button class="{{ $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:text-white' }}rounded rounded-md px-3 py-2 text-base font-medium text-white"
        aria-current = "{{ $active ? 'page' : 'false' }}" {{ $attributes }}>{{ $slot }}</button>

@endif