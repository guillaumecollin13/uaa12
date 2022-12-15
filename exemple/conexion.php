<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/index.css">
    <link rel="stylesheet" href="CSS/animation.css">
    <title>conexion</title>
</head>

<body>
    <header>
        <ul class="flex space-evenly">
            <li class="menu"><a href="index.php">Home</a></li>
            <li class="menu"><a href="profil.php">Page profil</a></li>
            <li class="imageMenu"><a href="index.php"><ion-icon size="large" name="home-outline"></ion-icon></a></li>
            <li class="imageMenu"><a href="profil.php"><ion-icon size="large" name="person-outline"></ion-icon></a></li>
            <li><a href="conexion.php">connexion</a></li>
        </ul>
    </header>
    <form action="">
        <fieldset class="center">
            <legend>
                <h1>connexion</h1>
            </legend>
            <div class="marg">
                <label>nom d'utilisateur</label>
                <input type="text" name="username" id="username" />
            </div>
            <div class="marg">
                <label>mots de passe</label>
                <input type="password" name="password" ide="password">
            </div>
        </fieldset>
        <div class="center marg">
            <button>link start</button>
        </div>
    </form>
    <div class="center marg">
        <p>pas encore inscrit? inscrivez vous <a href="inscription.php">ici!</a></p>
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
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</html>