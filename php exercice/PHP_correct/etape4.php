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
     $i = -5;
     $j = 1;
     for($j =1; $j<=2;$i++) {
        if($i<0){ 
     $k = $i*-1;
     echo "<la valuer absolue de" . $i . "est" . $k . "</p>";
        }
        else {
    echo "<la valuer absolue de" . $i . "est" . $i . "</p>"; 
        }
        $j = 10;
        }

    ?>
</body>
</html>