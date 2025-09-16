@extends('layouts.app')

@section('content')
<div class="min-h-screen flex flex-col">
    <!-- Contenu principal avec padding-bottom suffisant pour le footer -->
    <div class="container mx-auto px-5 py-8 pb-52 flex-1">
        <h2 class="text-2xl font-semibold text-gray-900 mb-8">Complétez votre réservation</h2>

        <div class="grid md:grid-cols-3 gap-12 items-stretch">
            
            <!-- Basic -->
            <x-card-plan
                title="Basic"
                subtitle="Votre test psychotechnique simple"
                price="+ 0€"
                color="#f2f3f5"
                border="border-gray-200"
                :features="[
                    ['icon' => 'assets/logo/cursor-hand-click-svgrepo-com.svg', 'text' => 'Entraînement illimité et gratuit'],
                    ['icon' => 'assets/logo/check-mark-circle-svgrepo-com-noire.svg', 'text' => 'Annulation jusqu\'à 48 heures'],
                    ['text' => 'Recevez votre test le jour J'],
                ]"
            />

            <!-- Assurance -->
            <x-card-plan
                title="Assurance"
                subtitle="Votre test psychotechnique sans stress"
                price="+ 40€"
                note="À peine le prix d'un resto"
                color="#0dbc0d"
                border="border-4 border-[#0dbc0d]"
                :features="[
                    ['icon' => 'assets/logo/cursor-hand-click-svgrepo-com-vert.svg', 'text' => 'Entraînement illimité et gratuit'],
                    ['icon' => 'assets/logo/check-mark-circle-svgrepo-com.svg', 'text' => 'Annulation jusqu\'à 48 heures'],
                    ['icon' => 'assets/logo/refresh-svgrepo-com-vert.svg', 'text' => 'Repassez votre test pour 0€ (si test échoué)', 'bold' => true],
                    ['text' => 'Recevez votre test le jour J'],
                    ['icon' => 'assets/logo/book-svgrepo-com-vert.svg', 'text' => 'Livret de préparation au test psychotechnique'],
                ]"
            />

            <!-- Complet -->
            <x-card-plan
                title="Complet"
                subtitle="Votre test psychotechnique tout compris"
                price="+ 60€"
                note="À peine le prix de 4 pizzas"
                color="#36578a"
                border="border-gray-200"
                :features="[
                    ['icon' => 'assets/logo/cursor-hand-click-svgrepo-com-blueu.svg', 'text' => 'Entraînement illimité et gratuit'],
                    ['icon' => 'assets/logo/check-mark-circle-svgrepo-com-bleue.svg', 'text' => 'Annulation jusqu\'à 48 heures', 'bold' => true],
                    ['icon' => 'assets/logo/refresh-svgrepo-com-bleue.svg', 'text' => 'Repassez votre test pour 0€ (si test échoué)', 'bold' => true],
                    ['text' => 'Recevez votre test le jour J'],
                    ['icon' => 'assets/logo/book-svgrepo-com-bleue.svg', 'text' => 'Livret de préparation au test psychotechnique'],
                    ['icon' => 'assets/logo/download-minimalistic-svgrepo-com.svg', 'text' => 'Téléchargez vos résultats en illimité'],
                ]"
            />
        </div>
    </div>
</div>

<x-footer />
@endsection
