<div class="grid grid-cols-3 gap-0 text-center">
    @foreach ($circles as $circle)
    <div class="flex flex-col items-center">
        <div class="w-14 h-14 bg-white rounded-full flex items-center justify-center mb-4 shadow-md">{!! $circle['icon'] !!}</div>
        <p class="text-sm font-semibold text-gray-900 mb-1 leading-tight">{{ $circle['title'] }}</p>
        <p class="text-xs text-gray-600 leading-tight">{{ $circle['subtitle'] }}</p>
    </div>
    @endforeach
</div>
