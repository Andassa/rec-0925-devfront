@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto px-4 py-8">
    <div class="text-center mb-12">
        <h2 class="text-3xl font-bold text-gray-900 mb-4">
            Réservez votre test psychotechnique
        </h2>
        <p class="text-lg text-gray-600 max-w-2xl mx-auto">
            Centre agréé par la préfecture pour les tests psychotechniques obligatoires 
            suite à une suspension ou annulation de permis de conduire.
        </p>
    </div>

    <div class="grid md:grid-cols-2 gap-8 mb-12">
        <div class="card">
            <h3 class="text-xl font-semibold text-blue-700 mb-4">Informations pratiques</h3>
            <ul class="space-y-3 text-gray-600">
                <li class="flex items-start gap-2">
                    <span class="text-blue-600 mt-1">•</span>
                    <span>Durée du test : 45 minutes</span>
                </li>
                <li class="flex items-start gap-2">
                    <span class="text-blue-600 mt-1">•</span>
                    <span>Résultats immédiats</span>
                </li>
                <li class="flex items-start gap-2">
                    <span class="text-blue-600 mt-1">•</span>
                    <span>Centre agréé préfecture</span>
                </li>
                <li class="flex items-start gap-2">
                    <span class="text-blue-600 mt-1">•</span>
                    <span>Parking gratuit disponible</span>
                </li>
            </ul>
        </div>

        <div class="card">
            <h3 class="text-xl font-semibold text-blue-700 mb-4">Tarifs</h3>
            <div class="space-y-4">
                <div class="flex justify-between items-center">
                    <span class="text-gray-600">Test psychotechnique</span>
                    <span class="text-2xl font-bold text-blue-700">89€</span>
                </div>
                <p class="text-sm text-gray-500">
                    Paiement sécurisé par carte bancaire
                </p>
            </div>
        </div>
    </div>

    <div class="text-center">
        <a href="/ramananandro-completez-votre-reservation" class="btn-primary text-lg px-8 py-3">
            Réserver maintenant
        </a>
    </div>
</div>
@endsection
