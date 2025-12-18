@extends('layouts.app')

@section('title', 'Détails de l\'animal n°' . $animal->id)

@push('styles')
    @vite(['resources/css/animal-details.css'])
@endpush

@section('content')
    <x-animal 
        :nom="$animal->name"
        :espece="$animal->species"
        :age="$animal->age"
        :description="$animal->description"
        image="images/{{ $animal->photo }}"
    />

@endsection
