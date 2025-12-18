<header>
    <div class="container">
        <img src="{{ asset('images/logo.png') }}" alt="Logo" id="logo">
        <nav>
            <a href="{{ route('home') }}">
                Accueil
            </a>
            <a href="{{ route('animals.createCoquillette') }}">
                Ajouter un animal
            </a>
        </nav>
    </div>
</header>