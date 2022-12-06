<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fonction</title>
    <link rel="stylesheet" href="css/cssexamen.css">
</head>
<body>
    <?php 
    $nb=725;
    //function chercheDiviseur($nb,$diviseur){
    //        $i = 1;
    //       while($i <=$nb){
    //          if($nb%$i==0){
    //              $diviseur=$diviseur + $i+ " ";
    //          }
    //           $i=$i + 1;
    //         }
    //      return $diviseur;
    //}
    function TriangleRectangle($c1,$c2,$c3)
    {
      
        $Pg=0;
        $cote2=0;
        $cote3=0;
        if($c1>=$c2 && $c1>=$c3){
            $Pg=$c1;
            $cote2 = $c2;
            $cote3 =$c3;
        }
        elseif ($c2>=$c1 && $c2>=$c3) {
            $Pg=$c2;
            $cote2 = $c1;
            $cote3 =$c3;
        }
        else {
            $Pg=$c3;
            $cote2 = $c1;
            $cote3 =$c2;
        }
        if ($Pg<$cote2 + $cote3) {
          if ($Pg^2 ==$cote2^2 + $cote3^2) {
            if ($cote2 = $cote3) {
                $message = "triangle rectangle isocele";
            }
                else{
                $message = "triangle rectangle";
            }
            }
            else {
                $message = "le triangle n'est pas rectangle";
            }
            } 
            else{
                $message = "ce ne sont pas les dimension d'un triangle";
            }
            return $message;
        }
          

    ?>    
<li class="edensflex lol justifycontentspacearound">
        <ul class="aie">
        <a href="index.php" class="edenstext ">accueil</a>
        </ul>
        <ul class="aie">
        <a href="fonction.php"class="edenstext ">fonction</a>
        </ul>
        <ul class="aie">
    <a href="*"class="edenstext ">contact</a>
        </ul>
    </li>
        <div class="height">
        <div>
            <h1 class="color edensflex justifycontentspacearound">affichage avec des fonction php</h1>
        </div>
        <div class="edensflex justifycontentspacearound">
            <div>
                <h2>trouver les diviseur d'un nombre</h2>
                <p><?=$nb?> a comme diviseur </p>
            </div>
            <div>
                <h2>est-ce un triangle rectangle et lequel ? </h2>
                <?=TriangleRectangle(2,2,2)?>
            </div>
        </div>
   
        <div>
            <h1 class="color edensflex justifycontentspacearound">affichage sans fonction php</h1>
        </div>
        <div class="edensflex justifycontentspacearound">
        <div>
                <h2>remplacer un chiffre par un autre</h2>
            <?php 
            $chaine2 ="254896";
            
             
            //for ($i=0; $i < 7; $i++) {     
            //$nb =0;
            //if ($chaine2[$i]>5) { 
            //$nb=$chaine2[$i]+2;
            //echo $nb;
           // }
            //else{
            //    $nb=$chaine2[$i]+3;
            //    echo $nb;
           // }
            
       // }
            ?>
            </div>
            <div>
                <h2>remplacer voyelle et consone par un chiffre</h2>
                <?php
                $chaine="kayak";
            
                for ($i=0; $i < 6; $i++) { 
                    $nb =0;
                if ($chaine[$i]="a"||$chaine[$i]="e"||$chaine[$i]="i"||$chaine[$i]="o"||$chaine[$i]="u"||$chaine[$i]="y") { 
                $nb=1;
                echo $nb;
                }
                else{
                    echo $nb;
                }
                
            }
             
                ?>
            </div>
        </div>
        </div>
    <div class="lol">
    <li class="edensflex lol justifycontentspacebetween ">
        <p class="aie">examen 2022-2023</br>Uaa12 : creation d'un site web dynamique</p>
        </ul>
        <ul>
          <p class="aie">5tti</p>
        </ul>
    </li>
    </div>
</body>
</html>