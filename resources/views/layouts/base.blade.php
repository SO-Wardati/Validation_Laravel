<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Besley&family=Parisienne&family=Sofia&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/3c7f5856f6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="/css/@yield('css').css">
    <title>@yield('Les bandes dessinées')</title>
</head>

<body>
    <header>
        <nav>
            <ul class="menu">
                <li><a href="Accueil"><i class="fas fa-home"></i>Accueil</a></li>
                <li><a href="Les_Personnages"><i class="fas fa-clipboard-list"></i>La liste des personnages</a></li>
                <li><a href="Nouveau_Personnage"><i class="fas fa-user-plus"></i>Ajouter un nouveau personnage</a></li>
            </ul>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <div>
            <p class="foot">
                Validation Laravel : Septembre 2021
            </p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>


</body>

</html>
