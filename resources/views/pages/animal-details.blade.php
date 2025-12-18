@extends('layouts.app')

@section('title', 'Détails de l\'animal n°' . $animal->id)

@push('styles')
    @vite(['resources/css/animal-details.css'])
@endpush

@section('content')
    <h1>{{ $animal->name }}</h1>
    <article class="animal-details-container">
        <div class="animal-details-img"><img src="{{ asset('images/' . $animal->photo) }}" alt="{{ $animal->name }}"></div>
        <div class="animal-details-infos">
            <p> Espèce : {{ $animal->species }}</p>
            <p> Âge : {{ $animal->age }} ans </p>
            <p> {{ $animal->description }}</p>
        </div>
    </article>
@endsection
