@extends('layouts.app')

@section('content')
<!-- Container with same left/right margin as header -->
<div class="container mx-auto px-5 py-8">
    <h2 class="text-2xl font-semibold text-gray-900 mb-8">Complétez votre réservation</h2>

    <!-- Grid layout for pricing cards with equal heights -->
    <div class="grid md:grid-cols-3 gap-12 items-stretch">

        <!-- Basic Plan -->
        <div class="bg-white rounded-3xl shadow-sm border border-gray-200 overflow-hidden flex flex-col min-h-[600px]">
            <!-- Header -->
            <div class="bg-[#f2f3f5] shadow-md text-gray-700 text-center py-4 px-6">
                <h3 class="font-semibold text-lg">Basic</h3>
                <p class="text-sm text-gray-600 mt-1">Votre test psychotechnique simple</p>
            </div>

            <div class="p-6 flex flex-col flex-1">
                <!-- Price + Button -->
                <div class="text-center flex flex-col items-center mb-6">
                    <div class="text-4xl font-bold text-gray-900 mb-2">+ 0€</div>
                    <p class="text-sm text-gray-500 mb-2 invisible">Placeholder</p>
                    <button class="bg-gray-100 hover:bg-gray-200 text-gray-700 py-3 px-10 rounded-xl font-medium transition-colors flex items-center justify-center gap-2 shadow-md hover:shadow-lg">
                        <div class="w-3 h-3 bg-white rounded-full"></div>
                        Sélectionner
                    </button>
                </div>

                <hr class="border-gray-200 mb-6 -mx-6">

                <!-- Features list -->
                <div class="space-y-4 flex-1">
                    <div class="flex items-start gap-3">
                        <img src="{{ asset('assets/logo/cursor-hand-click-svgrepo-com.svg') }}" 
                             alt="Cursor click icon" 
                             class="w-6 h-6 flex-shrink-0 mt-0.5"/>
                        <span class="text-sm text-gray-700">Entraînement illimité et gratuit</span>
                    </div>
                    <div class="flex items-start gap-3">
                        <img src="{{ asset('assets/logo/check-mark-circle-svgrepo-com-noire.svg') }}" 
                             alt="Check mark icon" 
                             class="w-6 h-6 flex-shrink-0 mt-0.5"/>
                        <span class="text-sm text-gray-700">Annulation jusqu'à 48 heures</span>
                    </div>
                    <div class="flex items-start gap-3">
                        <svg class="w-6 h-6 text-gray-400 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                        <span class="text-sm text-gray-700">Recevez votre test le jour J</span>
                    </div>
                    <!-- Features invisibles pour équilibrer avec les autres cartes -->
                    <div class="flex items-start gap-3 invisible">
                        <svg class="w-5 h-5"/>
                        <span class="text-sm">Placeholder</span>
                    </div>
                    <div class="flex items-start gap-3 invisible">
                        <svg class="w-5 h-5"/>
                        <span class="text-sm">Placeholder</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Assurance Plan -->
        <div class="bg-white rounded-3xl shadow-sm border-4 border-[#0dbc0d] overflow-hidden flex flex-col min-h-[600px]">
            <div class="bg-[#0dbc0d] text-white text-center py-4 px-6">
                <h3 class="font-semibold text-lg">Assurance</h3>
                <p class="text-sm text-green-100 mt-1">Votre test psychotechnique sans stress</p>
            </div>

            <div class="p-6 flex flex-col flex-1">
                <div class="text-center flex flex-col items-center mb-6">
                    <div class="text-4xl font-bold text-gray-900 mb-2">+ 40€</div>
                    <p class="text-sm text-gray-500 mb-2">À peine le prix d'un resto</p>
                    <button class="bg-[#0dbc0d] hover:bg-[#0bb30b] text-white py-3 px-10 rounded-xl font-medium transition-colors flex items-center justify-center gap-2 shadow-md shadow-[#0dbc0d]/50">
                        <div class="w-3 h-3 bg-white rounded-full flex items-center justify-center">
                            <svg class="w-2 h-2 text-[#0dbc0d]" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        Sélectionner
                    </button>
                </div>

                <hr class="border-gray-200 mb-6 -mx-6">

                <div class="space-y-4 flex-1">
                    <div class="flex items-start gap-3">
                        <img src="{{ asset('assets/logo/cursor-hand-click-svgrepo-com-vert.svg') }}" 
                             alt="Cursor click icon" 
                             class="w-6 h-6 flex-shrink-0 mt-0.5"/>
                        <span class="text-sm text-gray-700">Entraînement illimité et gratuit</span>
                    </div>
                    <div class="flex items-start gap-3">
                        <img src="{{ asset('assets/logo/check-mark-circle-svgrepo-com.svg') }}" 
                             alt="Check mark icon" 
                             class="w-6 h-6 flex-shrink-0 mt-0.5"/>
                        <span class="text-sm text-gray-700">Annulation jusqu'à 48 heures</span>
                    </div>
                    <div class="flex items-start gap-3">
                        <img src="{{ asset('assets/logo/refresh-svgrepo-com-vert.svg') }}" 
                             alt="Refresh icon" 
                             class="w-6 h-6 flex-shrink-0 mt-0.5"/>
                        <span class="text-sm text-gray-700 font-bold">Repassez votre test pour 0€ (si test échoué)</span>
                    </div>
                    <div class="flex items-start gap-3">
                        <svg class="w-6 h-6 text-[#0dbc0d] flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                        <span class="text-sm text-gray-700">Recevez votre test le jour J</span>
                    </div>
                    <div class="flex items-start gap-3">
                        <img src="{{ asset('assets/logo/book-svgrepo-com-vert.svg') }}" 
                             alt="Book icon" 
                             class="w-6 h-6 flex-shrink-0 mt-0.5"/>
                        <span class="text-sm text-gray-700">Livret de préparation au test psychotechnique</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Complet Plan -->
        <div class="bg-white rounded-3xl shadow-sm border border-gray-200 overflow-hidden flex flex-col min-h-[600px]">
            <!-- Header avec nouvelle couleur -->
            <div class="text-white text-center py-4 px-6" style="background-color: #36578a;">
                <h3 class="font-semibold text-lg">Complet</h3>
                <p class="text-sm text-blue-100 mt-1">Votre test psychotechnique tout compris</p>
            </div>

            <div class="p-6 flex flex-col flex-1">
                <!-- Prix + bouton -->
                <div class="text-center flex flex-col items-center mb-6">
                    <div class="text-4xl font-bold text-gray-900 mb-2">+ 60€</div>
                    <p class="text-sm text-gray-500 mb-2">À peine le prix de 4 pizzas</p>
                    <button class="text-white py-3 px-10 rounded-xl font-medium transition-colors flex items-center justify-center gap-2"
                            style="background-color: #36578a;"
                            onmouseover="this.style.backgroundColor='#2b466f';"
                            onmouseout="this.style.backgroundColor='#36578a';">
                        <div class="w-3 h-3 bg-white rounded-full"></div>
                        Sélectionner
                    </button>
                </div>

                <hr class="border-gray-200 mb-6 -mx-6">

                <!-- Features list -->
                <div class="space-y-4 flex-1">
                    <div class="flex items-start gap-3">
                        <img src="{{ asset('assets/logo/cursor-hand-click-svgrepo-com-blueu.svg') }}" 
                             alt="Cursor click icon" 
                             class="w-6 h-6 flex-shrink-0 mt-0.5"/>
                        <span class="text-sm text-gray-700">Entraînement illimité et gratuit</span>
                    </div>
                    <div class="flex items-start gap-3">
                        <img src="{{ asset('assets/logo/check-mark-circle-svgrepo-com-bleue.svg') }}" 
                             alt="Check mark icon" 
                             class="w-6 h-6 flex-shrink-0 mt-0.5"/>
                        <span class="text-sm text-gray-700 font-bold">Annulation jusqu'à 48 heures</span>
                    </div>
                    <div class="flex items-start gap-3">
                        <img src="{{ asset('assets/logo/refresh-svgrepo-com-bleue.svg') }}" 
                             alt="Refresh icon" 
                             class="w-6 h-6 flex-shrink-0 mt-0.5"/>
                        <span class="text-sm text-gray-700 font-bold">Repassez votre test pour 0€ (si test échoué)</span>
                    </div>
                    <div class="flex items-start gap-3">
                        <svg class="w-6 h-6" fill="none" stroke="#36578a" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                        <span class="text-sm text-gray-700">Recevez votre test le jour J</span>
                    </div>
                    <div class="flex items-start gap-3">
                        <img src="{{ asset('assets/logo/book-svgrepo-com-bleue.svg') }}" 
                             alt="Book icon" 
                             class="w-6 h-6 flex-shrink-0 mt-0.5"/>
                        <span class="text-sm text-gray-700">Livret de préparation au test psychotechnique</span>
                    </div>
                    <div class="flex items-start gap-3">
                        <img src="{{ asset('assets/logo/download-minimalistic-svgrepo-com.svg') }}" 
                             alt="Download icon" 
                             class="w-6 h-6 flex-shrink-0 mt-0.5"/>
                        <span class="text-sm text-gray-700">Téléchargez vos résultats en illimité</span>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
