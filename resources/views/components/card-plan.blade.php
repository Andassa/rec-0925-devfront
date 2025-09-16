<div class="bg-white rounded-3xl shadow-sm border {{ $border }} overflow-hidden flex flex-col min-h-[600px]">
    <!-- Header -->
<div class="text-center py-4 px-6 rounded-t-3xl"
     style="background-color: {{ $color }}; color: {{ $color === '#f2f3f5' ? '#374151' : 'white' }}; box-shadow: 0 4px 6px rgba(0,0,0,0.1);">
    <h3 class="font-semibold text-lg">{{ $title }}</h3>
    <p class="text-sm mt-1 opacity-80">{{ $subtitle }}</p>
</div>

    <div class="p-6 flex flex-col flex-1">
        <!-- Price + Button -->
        <div class="text-center flex flex-col items-center mb-6">
            <div class="text-4xl font-bold text-gray-900 mb-2">{{ $price }}</div>
            @if($note)
                <p class="text-sm text-gray-500 mb-2">{{ $note }}</p>
            @else
                <p class="text-sm text-gray-500 mb-2 invisible">Placeholder</p>
            @endif

            <button class="py-3 px-10 rounded-xl font-medium transition-colors flex items-center justify-center gap-2 shadow-md hover:shadow-lg"
                    style="background-color: {{ $color }}; color: {{ $color === '#f2f3f5' ? '#374151' : 'white' }}">
                <div class="w-3 h-3 bg-white rounded-full"></div>
                Sélectionner
            </button>
        </div>

        <hr class="border-gray-200 mb-6 -mx-6">

        <!-- Features -->
        <div class="space-y-4 flex-1">
            @foreach($features as $feature)
                <div class="flex items-start gap-3">
                    @if(isset($feature['icon']))
                        <img src="{{ asset($feature['icon']) }}" alt="Icon" class="w-6 h-6 flex-shrink-0 mt-0.5"/>
                    @else
                        <svg class="w-6 h-6 text-gray-400 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor"
                             viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                    @endif
                    <span class="text-sm text-gray-700 {{ isset($feature['bold']) && $feature['bold'] ? 'font-bold' : '' }}">
                        {{ $feature['text'] }}
                    </span>
                </div>
            @endforeach
        </div>
    </div>
</div>