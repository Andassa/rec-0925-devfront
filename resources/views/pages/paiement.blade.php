@php
$hideFooter = true;
@endphp
@extends('layouts.app')

@section('content')

<!-- Main Content -->
<div class="container mx-auto px-4 lg:px-5 py-8">
    <div class="grid lg:grid-cols-3 gap-6 lg:gap-8">
        
        <!-- Left Column - Forms (2/3 width) -->
        <div class="lg:col-span-2 flex justify-start">
            <div class="w-full sm:w-4/5 md:w-3/4 lg:w-2/3 lg:pl-2 space-y-8">
                
                <!-- Confirmation Section -->
                <div>
                    <h2 class="text-2xl font-semibold text-gray-900 mb-6">Confirmer et payer</h2>

                    <!-- Warning Alert -->
                    <div class="flex items-start gap-3 p-4 bg-red-50 border border-red-200 rounded-lg mb-8">
                        <img src="{{ asset('assets/logo/line-ascendant-graphic-of-zigzag-arrow-svgrepo-com.svg') }}" 
                             alt="Alerte" 
                             class="w-5 h-5 mt-0.5 flex-shrink-0">
                        <div>
                            <p class="font-medium text-gray-900 text-sm">Date de réservation en forte demande</p>
                            <p class="text-sm text-gray-600 mt-1">Les réservations sont fréquentes pour ce centre</p>
                        </div>
                    </div>

                    <!-- Personal Information Form -->
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">Vos informations personnelles</h3>
                    <div class="space-y-3 mb-8">
                        <input type="text" placeholder="Nom Prénom" class="w-full px-4 py-4 bg-gray-100 border-0 rounded-lg text-gray-700 placeholder-gray-500 focus:ring-2 focus:ring-blue-500 focus:bg-white transition-colors">
                        <input type="email" placeholder="Email" class="w-full px-4 py-4 bg-gray-100 border-0 rounded-lg text-gray-700 placeholder-gray-500 focus:ring-2 focus:ring-blue-500 focus:bg-white transition-colors">
                        <input type="tel" placeholder="Numéro de téléphone" class="w-full px-4 py-4 bg-gray-100 border-0 rounded-lg text-gray-700 placeholder-gray-500 focus:ring-2 focus:ring-blue-500 focus:bg-white transition-colors">
                    </div>

                    <hr class="border-gray-200 mb-8">
                </div>

                <!-- Test Details Section -->
                <div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-6">Votre test psychotechnique</h3>
                    <div class="space-y-1 mb-6">
                        <!-- Date -->
                        <div class="flex items-center gap-4">
                            <div class="flex items-center justify-center flex-shrink-0 w-6 h-6">
                                <img src="{{ asset('assets/logo/date-calendar-schedule-event-appointment-svgrepo-com.svg') }}" alt="Date" class="w-6 h-6">
                            </div>
                            <div>
                                <p class="font-semibold text-gray-900">Date</p>
                                <p class="text-gray-700">12 mai 2025</p>
                            </div>
                        </div>

                        <!-- Horaire -->
                        <div class="flex items-center gap-4">
                            <div class="flex items-center justify-center flex-shrink-0 w-6 h-6">
                                <img src="{{ asset('assets/logo/time-svgrepo-com.svg') }}" alt="Horaire" class="w-6 h-6">
                            </div>
                            <div>
                                <p class="font-semibold text-gray-900">Horaire</p>
                                <p class="text-gray-700">12:30</p>
                            </div>
                        </div>

                        <!-- Adresse -->
                        <div class="flex items-center gap-4">
                            <div class="flex items-center justify-center flex-shrink-0 w-6 h-6">
                                <img src="{{ asset('assets/logo/location-svgrepo-com.svg') }}" alt="Adresse" class="w-6 h-6">
                            </div>
                            <div>
                                <p class="font-semibold text-gray-900">Adresse</p>
                                <p class="text-gray-700">39 Rue Emile Steiner, 27200 Vernon</p>
                            </div>
                        </div>
                    </div>

                    <hr class="border-gray-200 mb-8">
                </div>

                <!-- Payment Methods Section -->
                <div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-0.5">Choisissez votre moyen de paiement</h3>
                    
                    <!-- Security Badge -->
                    <div class="flex items-center gap-2 mb-0.5">
                        <img src="{{ asset('assets/logo/padlock-svgrepo-com.svg') }}" alt="Sécurisé" class="w-7 h-7 text-gray-900">
                        <span class="text-sm font-semibold text-gray-900">100% SÉCURISÉ</span>
                    </div>

                    <!-- Payment options -->
                    <div class="divide-y divide-gray-200 mb-8">
                        <label class="flex items-center gap-4 cursor-pointer py-3">
                            <input type="radio" name="payment" value="card" class="w-5 h-5 text-blue-600 border-gray-300 focus:ring-blue-500">
                            <div class="flex items-center gap-3">
                                <img src="{{ asset('assets/logo/carteBancaire.png') }}" alt="Carte Bancaire" class="w-20 h-14 object-contain">
                                <span class="text-gray-900 font-medium">Carte bancaire</span>
                            </div>
                        </label>

                        <label class="flex items-center gap-4 cursor-pointer py-3">
                            <input type="radio" name="payment" value="apple-pay" class="w-5 h-5 text-blue-600 border-gray-300 focus:ring-blue-500">
                            <div class="flex items-center gap-3">
                                <img src="{{ asset('assets/logo/Apple_Pay_logo.svg.png') }}" alt="Apple Pay" class="w-20 h-14 object-contain">
                                <span class="text-gray-900 font-medium">Apple Pay</span>
                            </div>
                        </label>

                        <label class="flex items-center gap-4 cursor-pointer py-3">
                            <input type="radio" name="payment" value="paypal" class="w-5 h-5 text-blue-600 border-gray-300 focus:ring-blue-500">
                            <div class="flex items-center gap-3">
                                <img src="{{ asset('assets/logo/PayPal.svg.webp') }}" alt="Paypal" class="w-20 h-14 object-contain">
                                <span class="text-gray-900 font-medium">Paypal</span>
                            </div>
                        </label>

                        <label class="flex items-center gap-4 cursor-pointer py-3 border-b border-gray-200">
                            <input type="radio" name="payment" value="alma" class="w-5 h-5 text-blue-600 border-gray-300 focus:ring-blue-500">
                            <div class="flex items-center gap-3">
                                <img src="{{ asset('assets/logo/alma.png') }}" alt="Alma" class="w-20 h-14 object-contain">
                                <span class="text-gray-900 font-medium">Alma</span>
                            </div>
                        </label>
                    </div>

                    <!-- Button -->
                    <button class="w-full bg-pink-600 hover:bg-pink-700 text-white py-4 px-6 rounded-lg font-semibold text-lg flex items-center justify-center gap-2 transition-colors">
                        Je réserve mon test psychotechnique
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 12h14" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 6l6 6-6 6" />
                        </svg>
                    </button>
                </div>

            </div>
        </div>

        <!-- Right Column - Summary (1/3 width) -->
        <div class="lg:col-span-1 flex justify-start">
            <div class="relative sticky top-8 space-y-4 w-full lg:w-[380px] lg:pl-2">
                <!-- Card récapitulatif -->
                <div class="bg-white rounded-lg border border-gray-200 p-8 w-full">
                    <h3 class="text-base font-semibold text-pink-600 mb-4 whitespace-nowrap">
                        Récapitulatif de votre test psychotechnique
                    </h3>

                    <div class="mb-4">
                        <span class="text-lg font-medium text-gray-700">Total à payer : </span>
                        <span class="text-lg font-medium text-gray-900">130.00€</span>
                    </div>

                    <p class="text-xs text-gray-600 leading-relaxed">
                        En passant votre commande, vous acceptez les conditions générales 
                        de vente de la société AAAEP. Veuillez consulter notre politique de 
                        protection des données.
                    </p>
                </div>

                <!-- Cercles -->
                <div class="grid grid-cols-3 gap-0 text-center">
                    <!-- Cercle 1 -->
                    <div class="flex flex-col items-center">
                        <div class="w-14 h-14 bg-white rounded-full flex items-center justify-center mb-4 shadow-md">
                            <svg class="w-7 h-7 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 6.253v13m0-13C10.832 5.477 
                                    9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 
                                    18.477 5.754 18 7.5 18s3.332.477 4.5 
                                    1.253m0-13C13.168 5.477 14.754 5 16.5 
                                    5c1.747 0 3.332.477 4.5 1.253v13C19.832 
                                    18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                            </svg>
                        </div>
                        <p class="text-sm font-semibold text-gray-900 mb-1 leading-tight">Entraînement</p>
                        <p class="text-xs text-gray-600 leading-tight">Gratuit Illimité</p>
                    </div>

                    <!-- Cercle 2 -->
                    <div class="flex flex-col items-center">
                        <div class="w-14 h-14 bg-white rounded-full flex items-center justify-center mb-4 shadow-md">
                            <svg class="w-7 h-7 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12h6m-6 4h6m2 5H7a2 2 0 
                                    01-2-2V5a2 2 0 012-2h5.586a1 1 0 
                                    01.707.293l5.414 5.414a1 1 0 
                                    01.293.707V19a2 2 0 01-2 2z"/>
                            </svg>
                        </div>
                        <p class="text-sm font-semibold text-gray-900 mb-1 leading-tight">Résultats</p>
                        <p class="text-xs text-gray-600 leading-tight">le Jour Même</p>
                    </div>

                    <!-- Cercle 3 -->
<div class="flex flex-col items-center">
    <div class="w-14 h-14 bg-white rounded-full flex items-center justify-center mb-4 shadow-md">
        <img src="{{ asset('assets/logo/check-mark-circle-svgrepo-com.svg') }}" 
             alt="Check mark" 
             class="w-8 h-8 text-green-600"/>
    </div>
    <p class="text-sm font-semibold text-gray-900 mb-1 leading-tight">Annulation</p>
    <p class="text-xs text-gray-600 leading-tight">Gratuite jusqu'à 48h</p>
</div>

                </div>
            </div>
        </div>

    </div>
</div>

@endsection
