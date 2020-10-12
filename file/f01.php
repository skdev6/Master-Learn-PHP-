<?php 

    $fname = 'F:\_Desktop_\_learning\_Learn_PHP\php.local.com\file\data\f1.txt';

    if(is_readable($fname)){
        $fp = fopen($fname, 'r');

        while($line = fgets($fp)){
            echo $line;
        }

        // rewind($fp);
        fseek($fp, 8);
        while($line = fgets($fp, 5)){
            echo $line.'-';
        }

        fclose($fp);

        $data = file($fname);

        print_r($data);

        echo file_get_contents($fname);
    }
?> 