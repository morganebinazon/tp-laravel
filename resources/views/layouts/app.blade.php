<!-- resources/views/layouts/main.blade.php -->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mon Application E-commerce')</title>
    <style>
        /* Exemple de styles */
body {
    font-family: Arial, sans-serif;
}

header nav ul {
    list-style-type: none;
    padding: 0;
}

header nav ul li {
    display: inline;
    margin-right: 10px;
}

header nav ul li a {
    text-decoration: none;
    color: #333;
}

main {
    padding: 20px;
}

footer {
    background-color: #f0f0f0;
    text-align: center;
    padding: 10px;
    position: fixed;
    bottom: 0;
    width: 100%;
}

    </style>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="{{ url('/') }}">Accueil</a></li>
                <li><a href="{{ url('/about') }}">À propos</a></li>
                <li><a href="{{ url('/contact') }}">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2023 Mon Application E-commerce. Tous droits réservés.</p>
    </footer>

    <!-- Lien vers un script JavaScript principal -->
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
