@extends('layouts.app')

@section('title', 'Accueil')

@section('content')

    <h1> Nos animaux </h1>

    <div id="animal-grid">
        @forelse($animals as $animal)
            <x-animal :animal="$animal" />
        @empty
            <p class="empty-message">Aucun animal disponible pour le moment.</p>
        @endforelse
    </div>
@endsection
