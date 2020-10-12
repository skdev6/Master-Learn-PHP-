<?php 

    $fname = 'F:\_Desktop_\_learning\_Learn_PHP\php.local.com\file\data\f7.txt';
    
    $students = array(
        array(
            "FName" => "Sumon",
            "LName" => "Khan",
            "Age" => 12,
            "Class" => 7,
            "Roll" => 13,
        ),
        array(
            "FName" => "Sume",
            "LName" => "Akter",
            "Age" => 9,
            "Class" => 4,
            "Roll" => 16,
        ),
        array(
            "FName" => "Shahin",
            "LName" => "Khan",
            "Age" => 30,
            "Class" => 10,
            "Roll" => 50,
        )
    );

    // $encodedData = json_encode($students);
    // file_put_contents($fname, $encodedData );

    $getFile = file_get_contents($fname);
    $decodedData = json_decode($getFile, true);

    print_r($decodedData);

?> 