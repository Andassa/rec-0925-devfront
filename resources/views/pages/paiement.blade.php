@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto px-4 py-8">
    <div class="grid lg:grid-cols-2 gap-8">
        <!-- Left Column - Forms -->
        <div class="space-y-8">
            <!-- Confirmation Section -->
            <div class="bg-white rounded-lg p-6">
                <h2 class="text-xl font-semibold text-gray-900 mb-6">Confirmer et payer</h2>
                
                <div class="flex items-start gap-3 mb-6">
                    <svg class="w-5 h-5 text-red-500 mt-1" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                    </svg>
                    <div>
                        <p class="font-medium text-gray-900">Date de réservation en forte demande</p>
                        <p class="text-sm text-gray-600">Les réservations sont fréquentes pour ce centre</p>
                    </div>
                </div>

                <h3 class="font-semibold text-gray-900 mb-4">Vos informations personnelles</h3>
                <div class="space-y-4">
                    <div>
                        <label for="nom" class="block text-sm font-medium text-gray-700 mb-1">Nom Prénom</label>
                        <input type="text" id="nom" name="nom" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                        <input type="email" id="email" name="email" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    <div>
                        <label for="telephone" class="block text-sm font-medium text-gray-700 mb-1">Numéro de téléphone</label>
                        <input type="tel" id="telephone" name="telephone" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    </div>
                </div>
            </div>

            <!-- Test Details -->
            <div class="bg-white rounded-lg p-6">
                <h3 class="font-semibold text-gray-900 mb-4">Votre test psychotechnique</h3>
                <div class="space-y-3">
                    <div class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"/>
                        </svg>
                        <div>
                            <p class="font-medium text-gray-900">Date</p>
                            <p class="text-sm text-gray-600">12 mai 2025</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"/>
                        </svg>
                        <div>
                            <p class="font-medium text-gray-900">Horaire</p>
                            <p class="text-sm text-gray-600">12:30</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                        </svg>
                        <div>
                            <p class="font-medium text-gray-900">Adresse</p>
                            <p class="text-sm text-gray-600">39 Rue Emile Steiner, 27200 Vernon</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Payment Methods -->
            <div class="bg-white rounded-lg p-6">
                <h3 class="font-semibold text-gray-900 mb-4">Choisissez votre moyen de paiement</h3>
                <div class="flex items-center gap-2 mb-4">
                    <svg class="w-4 h-4 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    <span class="text-sm font-medium text-gray-900">100% SÉCURISÉ</span>
                </div>
                
                <div class="space-y-3">
                    <label class="flex items-center gap-3 p-3 border border-gray-200 rounded-lg cursor-pointer hover:bg-gray-50">
                        <input type="radio" name="payment" value="card" class="text-blue-600">
                        <div class="flex items-center gap-2">
                            <div class="w-8 h-5 bg-blue-600 rounded flex items-center justify-center">
                                <span class="text-xs text-white font-bold">CB</span>
                            </div>
                            <span class="text-sm font-medium">Carte bancaire</span>
                        </div>
                    </label>
                    
                    <label class="flex items-center gap-3 p-3 border border-gray-200 rounded-lg cursor-pointer hover:bg-gray-50">
                        <input type="radio" name="payment" value="apple-pay" class="text-blue-600">
                        <div class="flex items-center gap-2">
                            <svg class="w-6 h-6" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M18.71 19.5c-.83 1.24-1.71 2.45-3.05 2.47-1.34.03-1.77-.79-3.29-.79-1.53 0-2 .77-3.27.82-1.31.05-2.3-1.32-3.14-2.53C4.25 17 2.94 12.45 4.7 9.39c.87-1.52 2.43-2.48 4.12-2.51 1.28-.02 2.5.87 3.29.87.78 0 2.26-1.07 3.81-.91.65.03 2.47.26 3.64 1.98-.09.06-2.17 1.28-2.15 3.81.03 3.02 2.65 4.03 2.68 4.04-.03.07-.42 1.44-1.38 2.83M13 3.5c.73-.83 1.94-1.46 2.94-1.5.13 1.17-.34 2.35-1.04 3.19-.69.85-1.83 1.51-2.95 1.42-.15-1.15.41-2.35 1.05-3.11z"/>
                            </svg>
                            <span class="text-sm font-medium">Apple Pay</span>
                        </div>
                    </label>
                    
                    <label class="flex items-center gap-3 p-3 border border-gray-200 rounded-lg cursor-pointer hover:bg-gray-50">
                        <input type="radio" name="payment" value="paypal" class="text-blue-600">
                        <div class="flex items-center gap-2">
                            <svg class="w-6 h-6 text-blue-600" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M7.076 21.337H2.47a.641.641 0 0 1-.633-.74L4.944.901C5.026.382 5.474 0 5.998 0h7.46c2.57 0 4.578.543 5.69 1.81 1.01 1.15 1.304 2.42 1.012 4.287-.023.143-.047.288-.077.437-.983 5.05-4.349 6.797-8.647 6.797h-2.19c-.524 0-.968.382-1.05.9l-1.12 7.106zm14.146-14.42a3.35 3.35 0 0 0-.607-.541c-.013.076-.026.175-.041.26-.93 4.778-4.005 7.201-9.138 7.201h-2.19a.75.75 0 0 0-.741.63l-1.398 8.864a.641.641 0 0 0 .633.74h4.606a.75.75 0 0 0 .741-.63l.131-.828.858-5.431a.75.75 0 0 1 .741-.63h.464c3.64 0 6.499-1.48 7.327-5.75.347-1.79.213-3.29-.587-4.35z"/>
                            </svg>
                            <span class="text-sm font-medium">Paypal</span>
                        </div>
                    </label>
                    
                    <label class="flex items-center gap-3 p-3 border border-gray-200 rounded-lg cursor-pointer hover:bg-gray-50">
                        <input type="radio" name="payment" value="alma" class="text-blue-600">
                        <div class="flex items-center gap-2">
                            <div class="w-8 h-5 bg-orange-500 rounded flex items-center justify-center">
                                <span class="text-xs text-white font-bold">A</span>
                            </div>
                            <span class="text-sm font-medium">Alma</span>
                        </div>
                    </label>
                </div>
                
                <button class="w-full bg-pink-500 hover:bg-pink-600 text-white py-3 px-4 rounded-lg font-medium mt-6 flex items-center justify-center gap-2 transition-colors">
                    Je réserve mon test psychotechnique
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Right Column - Summary -->
        <div class="bg-white rounded-lg p-6 h-fit">
            <h3 class="text-lg font-semibold text-pink-500 mb-4">Récapitulatif de votre test psychotechnique</h3>
            
            <div class="mb-6">
                <div class="flex justify-between items-center mb-2">
                    <span class="text-sm text-gray-600">Total à payer :</span>
                    <span class="text-xl font-bold">130.00€</span>
                </div>
                <p class="text-xs text-gray-500">
                    En passant votre commande, vous acceptez les conditions générales 
                    de vente de la société AACEP. Veuillez consulter notre politique de 
                    protection des données.
                </p>
            </div>

            <div class="grid grid-cols-3 gap-4 text-center">
                <div class="flex flex-col items-center">
                    <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mb-2">
                        <svg class="w-6 h-6 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <p class="text-xs font-medium text-gray-900">Entraînement</p>
                    <p class="text-xs text-gray-600">Gratuit Illimité</p>
                </div>
                
                <div class="flex flex-col items-center">
                    <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mb-2">
                        <svg class="w-6 h-6 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V4a2 2 0 00-2-2H6zm1 2a1 1 0 000 2h6a1 1 0 100-2H7zm6 7a1 1 0 011 1v3a1 1 0 11-2 0v-3a1 1 0 011-1zm-3 3a1 1 0 100 2h.01a1 1 0 100-2H10zm-4 1a1 1 0 011-1h.01a1 1 0 110 2H7a1 1 0 01-1-1z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <p class="text-xs font-medium text-gray-900">Résultats</p>
                    <p class="text-xs text-gray-600">le Jour Même</p>
                </div>
                
                <div class="flex flex-col items-center">
                    <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mb-2">
                        <svg class="w-6 h-6 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <p class="text-xs font-medium text-gray-900">Annulation</p>
                    <p class="text-xs text-gray-600">Gratuite jusqu'à 48h</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
