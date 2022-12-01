<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/css.css">
</head>
<body>
    <?php
        $nombreDepart = 2;
        $nombreElementsSouhaite=3;
        $suite;
         function fonctionSpeciale( $nombreDepart, $nombreElementsSouhaite){
                $suite = "".$nombreDepart." "; 
            for($i=1; $i<= $nombreElementsSouhaite; $i++ ){
                if ($nombreDepart<5 && $nombreDepart % 3 !=0) {
                    $nombreDepart = $nombreDepart*5;
                    }
                    elseif($nombreDepart>5 && $nombreDepart<10){
                         $nombreDepart =$nombreDepart/6;
                        }
                        else{
                            $nombreDepart=$nombreDepart*$nombreDepart;
                            }
                }
            return $suite;
            }
            function algorithmeEuclide2($nbr1, $nbr2){
            $reste= $nbr2;
         while ($reste != 0) {
            $reste = $nbr1 % $nbr2;
            $nbr1 = $nbr2;
        $nbr2=$reste;
            }
     return $nbr1;
    }
    $nbr1=21;
    $nbr2=15;

    function nombrepaire(){
        
    }

?>






        <ul class="edensflex justifycontentspacearound edenscolorb edentext">
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
    <h1 class="brown">animalerie tom&co</h1>
    
<p>voila une suite bien speciale</p>
<p><?=fonctionSpeciale(5, 7)?></p>

<p>le PGCD entre <?=$nbr1?> et <?=$nbr2?> est <?=algorithmeEuclide2($nbr1, $nbr2)?></p>



</body>
</html>