<?php 

    $fname = 'F:\_Desktop_\_learning\_Learn_PHP\php.local.com\file\data\f2.txt';
    
    //$exestingData = file_get_contents($fname);

    $fp = fopen($fname, 'a');

    
    //fwrite($fp, $exestingData);
    fwrite($fp, "Sumon\n");
    fwrite($fp, "Sume\n");
    fwrite($fp, "Shahin\n");


?> 