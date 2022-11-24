<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php $i = -5;
     for($j =1; $j<=2;$j++) :?>
        <?php if($i<0) : $k = $i*-1;?>
            <p>la valuer absolue de </p> <?= $i ?> <p>est</p> <?= $k ?><?php $i = 10;?>
        <?php else : ?>
            <p>la valeur absolue de</p><?=$i ?><p>est</p><?=$i ?> 
        <?php endif?>
    
    <?php endfor?>
</body>
</html>