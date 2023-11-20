@props(['name', 'percentage'])
<div class="p-4">
    <h3 class="text-2xl">{{ $name }}</h3>
    <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-400">
        <div class="bg-gray-600 dark:bg-gray-100 h-2.5 rounded-full" style="width: {{ $percentage }}%"></div>
    </div>
</div>