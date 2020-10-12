<?php 

    /*  Array Manipulation
        1. pop();
        2. puch();
        3. shift();
        4. unshift();
    */

    $array = array("Sumon", "Redoy", "sakin", "monir");

    array_shift($array);
 
    for($i = 0; $i < count($array); $i++){
        echo $array[$i]."\n";
    }

?>