<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    echo '<h1> coucou </h1>';
    echo '<p>hello world</p>';
    ?>
<fieldset>
<legend>Vos coordonnées</legend>
    <form >
        <div>
            <label>nom</label>
            <input type="text"  name="nom" id="nom" />
        </div>
        <div>
            <label for="">prenom</label>
            <input type="text" name="prenom" id="Prenom" />
        </div>
        <div>
        <label>date de naissance</label>
        <input type="date" name="datenaissance" id="datenaissance"/>
        </div>
        <div>
        <label>email</label>
        <input type="email" name="email" id="email"/>
        </div>
        <div>
        <label>pays</label>
        <select name="pays" id="pays">
           <option value="france">belgique</option>
           <option value="espagne">Espagne</option>
           <option value="chine">Chine</option>
           <option value="japon">Japon</option>
       </select>
        </div>
</fieldset>
<fieldset>
<legend>périodicité</legend>
    <form >

</fieldset>

</body>
</html>