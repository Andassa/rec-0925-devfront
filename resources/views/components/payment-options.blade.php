<div class="divide-y divide-gray-200 mb-8">
    @foreach ($payments as $payment)
    <label class="flex items-center gap-4 cursor-pointer py-3 {{ $payment['border'] ?? false ? 'border-b border-gray-200' : '' }}">
        <input type="radio" name="payment" value="{{ $payment['value'] }}" class="w-5 h-5 text-blue-600 border-gray-300 focus:ring-blue-500">
        <div class="flex items-center gap-3">
            <img src="{{ asset('assets/logo/' . $payment['icon']) }}" alt="{{ $payment['label'] }}" class="w-20 h-14 object-contain">
            <span class="text-gray-900 font-medium">{{ $payment['label'] }}</span>
        </div>
    </label>
    @endforeach
</div>
