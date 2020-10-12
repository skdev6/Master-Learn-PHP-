<?php 

    /*
        Acociative array
    */

    $foods = [
        "vegetables" => "Brinjal, Brocolia, carrot, capsicam",
        "fuirts" => "Apple, Banana, Oreng, lemon",
    ];

    print_r($foods);

    foreach($foods as $key=>$values){
        echo "This is".$values."\n";
    }

    $keys = array_keys($foods);
    print_r($keys);

    for ($i=0; $i < count($keys); $i++) { 
        $keys[$i];
    }
?>