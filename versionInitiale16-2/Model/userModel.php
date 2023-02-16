<?php

function createdUser($PDO)
{
    try {
        $query = "insert into utilisateurs(nomUser, prenomUser, loginUser, emailUser, passWordUser, role ) values(:nomUser, :prenomUser, :loginUser, :emailUser, :passWordUser, :role)";
        $ajouteUser = $PDO->prepare($query);
        $ajouteUser->execute([
            'nomUser' => $_POST['txtNom'],
            'prenomUser' => $_POST['txtPrenom'],
            'loginUser' => $_POST['txtLogin'],
            'emailUser' => $_POST['txtEmail'],
            'passWordUser' => $_POST['txtMp'],
            'role' => 'user'
        ]);
    } catch (PDOException $e) {
        $message = $e->getMessage();
       die($message);
    }
}





//try {
    //$query = "SELECT * FROM biens";
    //$ajoute = $pdo->prepare($query);
    //$ajoute->execute();
    //$biens = $ajoute->fetchAll();
//} catch (PDOException $e) {
   // $message = $e->getMessage();
  //  die($message);
//}
//echo '<pre>' , var_dump($biens) , '</pre>';