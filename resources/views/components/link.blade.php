@props(['href', 'target'=>"_self"])
<a href="{{ $href }}" target="{{ $target }}" class="text-gray-900 dark:text-gray-100 underline decoration-dashed">{{ $slot }}</a>