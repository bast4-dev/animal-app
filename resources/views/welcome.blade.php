@extends('layouts.app')

@section('title', 'Accueil')

@section('content')

    <h1> Nos animaux </h1>

    <div id="animal-grid">
        @forelse($animals as $animal)
            <article class="animal-card">

                <a href="{{ route('animals.show', $animal->id) }}" class="main-card-link">
                    <img src="{{ asset('images/' . $animal->photo) }}" alt="{{ $animal->name }}" class="animal-photo">
                </a>

                <div class="animal-content">
                    <h2 class="animal-name">{{ $animal->name }}</h2>

                    <p> Espèce : {{ $animal->species }} </p>

                    <p> Âge : {{ $animal->age }} ans </p>

                    <p> {{ $animal->description }} </p>

                    <div class="animal-actions">
                        <a href="{{ route('animals.update', $animal->id) }}" class="btn-action">
                            Modifier
                        </a>
                        <a href="{{ route('animals.delete', $animal->id) }}" class="btn-action">
                            Supprimer
                        </a>
                    </div>
                </div>
            </article>
        @empty
            <p class="empty-message">Aucun animal disponible pour le moment.</p>
        @endforelse
    </div>
@endsection
