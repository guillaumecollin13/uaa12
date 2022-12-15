<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/index.css">
    <link rel="stylesheet" href="CSS/animation.css">
    <title>Document</title>
</head>
<body>
    <header>
          <ul class="flex space-evenly">
            <li class="menu"><a href="index.php">Home</a></li>
            <li  class="menu"><a href="profil.php">Page profil</a></li>
            <li class="imageMenu"><a href="index.php"><ion-icon size="large" name="home-outline"></ion-icon></a></li>
            <li class="imageMenu"><a href="profil.php"><ion-icon size="large" name="person-outline"></ion-icon></a></li>
            <li><a href="conexion.php">connexion</a></li>
        </ul>
    </header>
    <fieldset class="center">
        <legend><h1>inscription</h1></legend>
        <form>
            <div class="flex space-evenly">
                <div>
                <label>Nom</label>
                <input type="text" name="nom" id="nom" />
            </div>
            <div>
                <label class="edentext">prenom</label>
                <input class="edenstext" type="text" name="prenom" id="Prenom" />
            </div>
            </div>
            <div>
                </div>
                <label>nom d'utilisateur</label>
                <input type="text" name="username" id="username" />
            </div>
            <div>
                <label>email</label>
                <input class="edenstext" type="email" name="email" id="email" />
            </div>
            <div>
                <label>mots de passe</label>
                <input type="password" name="password" ide="password">
            </div>
    </fieldset>
    <div class="center">
                <button>soumettre</button>
            </div>

    <footer>
        <div class="flex space-between align-item-center">
            <p><a href="https://www.christinesurges.be/" target="_blank" title="Aller à l'agence">Voir l'agence</a></p>
            <div>
                <img class="imageIcon" src="Images/icon1.jpg" alt="image twitter">
                <img class="imageIcon" src="Images/icon2.jpg" alt="image facebook">
                <img class="imageIcon" src="Images/icon3.jpg" alt="image google">
            </div>
        </div>
    </footer>
    </header>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>