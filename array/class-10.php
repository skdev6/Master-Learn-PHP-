<?php 

    $string = "Hello World";

    // echo $string[8];
    $strleng = strlen($string);
    echo substr($string, - 3);

    // Strign Reverse

    for($i = 0; $i < $strleng; $i-- ){

        echo $string[$i];

    }


?>