<h1>{{ $nom }}</h1>
<article class="animal-details-container">
    <div class="animal-details-img"><img src="{{ asset($image) }}" alt="{{ $nom }}"></div>
    <div class="animal-details-infos">
        <p> Espèce : {{ $espece }}</p>
        <p> Âge : {{ $age }} ans </p>
        <p> {{ $description }}</p>
    </div>
</article>