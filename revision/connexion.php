<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/css.css">
</head>
<body>
<div>
        <ul class="edensflex justifycontentspacearound edenscolor">
            <li>
                <a class="brown" href="connexion.php">connexion</a>
            </li>
            <li>
                <a class="brown" href="accueil.php">accueil</a>
            </li>
            <li>
                <a class="brown" href="contact.php">contact</a>
            </li>
        </ul>
    </div>
   <div class="box">
     <h1 class="brown">connexion plateforme</h1>
<fieldset class="edenstext edensflex">
<legend>formulaire de contact</legend>
    <form >
        <div >
            <label>Nom</label>
            <input type="text"  name="nom" id="nom" />
        </div>
        <div>
            <label class="edentext">prenom</label>
            <input class="edenstext" type="text" name="prenom" id="Prenom" />
        </div>
        <div>
        <label>email</label>
        <input class="edenstext" type="email" name="email" id="email"/>
        </div>
        <div>
        <label>mots de passe</label>
        <input type="password" name="password" ide="password">
        </div>
        <div>
            <label class="inline">je ne suis pas un robot</label>
            <input type="checkbox" name="robot" id="robot">
        </div>
        <div>
        <button>soumettre</button>
        </div>
</fieldset>
   </div>
</body>
</html>