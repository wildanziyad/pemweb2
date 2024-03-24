<?php

    $title = "PRATIKUM 1 PHP" ;
    $nama="cow" ;
    $umur= 12 ;

    // echo " welcome " .   $name . "  dengan umur  " .  $umur;

    define('PHI', 3.14) ;
    
    $jari= 8;

    $keliling= 2 * PHI * $jari;
    $luas= PHI * $jari * $jari ;


    echo $keliling;
    echo '<br>' . $luas;
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title</title>
</head>
<body>
    
    <h1>    <?php echo $title ?>    </h1>


    <p> keliling lingkaran : <?php echo $keliling ?> </p>
    <p> luas lingkaran : <?php echo $luas ?> </p>

</body>
</html>