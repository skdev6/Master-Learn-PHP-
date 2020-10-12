<?php 

    $fname = 'F:\_Desktop_\_learning\_Learn_PHP\php.local.com\file\data\f2.txt';
    
    $fp = fopen($fname, 'r+');
    $line = fgets($fp);
    echo $line;
    fwrite($fp,'uranus\n'); 
    $line = fgets($fp);
    echo $line;
    fclose($fp);

?> 