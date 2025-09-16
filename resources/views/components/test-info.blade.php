<div class="space-y-4 mb-6">
    @foreach ($infos as $info)
    <div class="flex items-center gap-4">
        <img src="{{ asset('assets/logo/' . $info['icon']) }}" alt="{{ $info['label'] }}" class="w-6 h-6 flex-shrink-0">
        <div>
            <p class="font-semibold text-gray-900">{{ $info['label'] }}</p>
            <p class="text-gray-700">{{ $info['value'] }}</p>
        </div>
    </div>
    @endforeach
</div>
