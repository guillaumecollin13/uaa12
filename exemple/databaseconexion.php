
<?php
try {
    $dbh = new PDO('mysql:host=10.10.51.98;dbname=immobilier-, guillaume, root');
    die('RE conection refusé' );
} catch (PDOException $e) {
    die('erreur : '.$e -> getMessage());
}
?>