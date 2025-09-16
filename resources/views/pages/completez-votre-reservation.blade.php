@extends('layouts.app')

@section('content')
<!-- Container with same left/right margin as header -->
<div class="container mx-auto px-5 py-8">
    <h2 class="text-2xl font-semibold text-gray-900 mb-8">Complétez votre réservation</h2>
    
    <!-- Grid layout for pricing cards with equal heights -->
    <div class="grid md:grid-cols-3 gap-6 items-stretch">
        
        <!-- Basic Plan -->
        <div class="bg-white rounded-3xl shadow-sm border border-gray-200 overflow-hidden flex flex-col min-h-[600px]">
            <!-- Header -->
            <div class="bg-gray-50 text-gray-700 text-center py-4 px-6">
                <h3 class="font-semibold text-lg">Basic</h3>
                <p class="text-sm text-gray-600 mt-1">Votre test psychotechnique simple</p>
            </div>
            
            <div class="p-6 flex flex-col flex-1">
                <!-- Price section -->
                <div class="text-center mb-6">
                    <div class="text-4xl font-bold text-gray-900 mb-2">+ 0€</div>
                    <!-- Texte factice pour garder la même hauteur que les autres -->
                    <p class="text-sm text-gray-500 mb-4 invisible">Placeholder</p>
                </div>

                <!-- Button positioned to align with other cards -->
                <div class="mb-8">
                    <button class="w-full bg-gray-100 hover:bg-gray-200 text-gray-700 py-3 px-6 rounded-xl font-medium transition-colors">
                        Sélectionner
                    </button>
                </div>
                
                <hr class="border-gray-200 mb-6 w-full mx-0">

                <!-- Features list -->
                <div class="space-y-4 flex-1">
                    <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-gray-400 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                        <span class="text-sm text-gray-700">Entraînement illimité et gratuit</span>
                    </div>
                    <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-gray-400 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span class="text-sm text-gray-700">Annulation jusqu'à 48 heures</span>
                    </div>
                    <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-gray-400 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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
        <div class="bg-white rounded-3xl shadow-sm border-4 border-green-500 overflow-hidden flex flex-col min-h-[600px]">
            <div class="bg-green-500 text-white text-center py-4 px-6">
                <h3 class="font-semibold text-lg">Assurance</h3>
                <p class="text-sm text-green-100 mt-1">Votre test psychotechnique sans stress</p>
            </div>
            
            <div class="p-6 flex flex-col flex-1">
                <div class="text-center mb-6">
                    <div class="text-4xl font-bold text-gray-900 mb-2">+ 40€</div>
                    <p class="text-sm text-gray-500 mb-4">À peine le prix d'un resto</p>
                </div>
                
                <div class="mb-8">
                    <button class="w-full bg-green-500 hover:bg-green-600 text-white py-3 px-6 rounded-xl font-medium transition-colors flex items-center justify-center gap-2">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        Sélectionner
                    </button>
                </div>
                <hr class="border-gray-200 mb-6 w-full mx-0">

                <div class="space-y-4 flex-1">
                    <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-green-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                        <span class="text-sm text-gray-700">Entraînement illimité et gratuit</span>
                    </div>
                    <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-green-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span class="text-sm text-gray-700">Annulation jusqu'à 48 heures</span>
                    </div>
                    <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-green-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
                        </svg>
                        <span class="text-sm text-gray-700">Repassez votre test pour 0€ (si test échoué)</span>
                    </div>
                    <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-green-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                        <span class="text-sm text-gray-700">Recevez votre test le jour J</span>
                    </div>
                    <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-green-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                        </svg>
                        <span class="text-sm text-gray-700">Livret de préparation au test psychotechnique</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Complet Plan -->
        <div class="bg-white rounded-3xl shadow-sm border border-gray-200 overflow-hidden flex flex-col min-h-[600px]">
            <div class="bg-blue-600 text-white text-center py-4 px-6">
                <h3 class="font-semibold text-lg">Complet</h3>
                <p class="text-sm text-blue-100 mt-1">Votre test psychotechnique tout compris</p>
            </div>
            
            <div class="p-6 flex flex-col flex-1">
                <div class="text-center mb-6">
                    <div class="text-4xl font-bold text-gray-900 mb-2">+ 60€</div>
                    <p class="text-sm text-gray-500 mb-4">À peine le prix de 4 pizzas</p>
                </div>
                
                <div class="mb-8">
                    <button class="w-full bg-blue-600 hover:bg-blue-700 text-white py-3 px-6 rounded-xl font-medium transition-colors flex items-center justify-center gap-2">
                        <div class="w-3 h-3 bg-white rounded-full"></div>
                        Sélectionner
                    </button>
                </div>
                <hr class="border-gray-200 mb-6 w-full mx-0">

                <div class="space-y-4 flex-1">
                    <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-blue-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                        <span class="text-sm text-gray-700">Entraînement illimité et gratuit</span>
                    </div>
                    <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-blue-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span class="text-sm text-gray-700">Annulation jusqu'à 24 heures</span>
                    </div>
                    <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-blue-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
                        </svg>
                        <span class="text-sm text-gray-700">Repassez votre test pour 0€ (si test échoué)</span>
                    </div>
                    <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-blue-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                        <span class="text-sm text-gray-700">Recevez votre test le jour J</span>
                    </div>
                    <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-blue-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                        </svg>
                        <span class="text-sm text-gray-700">Livret de préparation au test psychotechnique</span>
                    </div>
                    <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-blue-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                        <span class="text-sm text-gray-700">Téléchargez vos résultats en illimité</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
