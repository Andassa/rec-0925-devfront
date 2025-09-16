<div class="space-y-3 mb-8">
    @foreach (['Nom Prénom', 'Email', 'Numéro de téléphone'] as $placeholder)
        <input type="{{ $placeholder === 'Email' ? 'email' : ($placeholder === 'Numéro de téléphone' ? 'tel' : 'text') }}" 
               placeholder="{{ $placeholder }}" 
               class="w-full px-4 py-4 bg-gray-100 rounded-lg text-gray-700 placeholder-gray-500 focus:ring-2 focus:ring-blue-500 focus:bg-white transition-colors border-0">
    @endforeach
</div>
