<?php 

    $fname = 'F:\_Desktop_\_learning\_Learn_PHP\php.local.com\file\data\f5.txt';
    
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

    // $fp = fopen($fname, 'w');

    // foreach($students as $student){
    //     $data = sprintf("%s, %s, %s, %s, %s\n", $student['FName'],$student['LName'],$student['Age'],$student['Class'],$student['Roll'] );
    //     fwrite($fp, $data);
    // }

    // $fp = fopen($fname, 'r');

    /* while($data = fgets($fp)){
        $student = explode(", ",$data);
        printf("Name = %s %s\n Age = %s\n Class = %s\n Roll = %s", 
            $student[0],
            $student[1],
            $student[2],
            $student[3],
            $student[4]
        );
    }

    fclose($fp); */

    // Secound Options
    // $fp = fopen($fname, 'w');
    // foreach($students as $student){
    //     fputcsv($fp, $student);
    // }

    /*$fp = fopen($fname, 'r');
    while($student = fgetcsv($fp)){

        printf("Name = %s %s\n Age = %s\n Class = %s\n Roll = %s", 
            $student[0],
            $student[1],
            $student[2],
            $student[3],
            $student[4]
        );
    }*/

    /*
        $student = array(
            "FName" => "Kamal",
            "LName" => "Khan",
            "Age" => 12,
            "Class" => 7,
            "Roll" => 13,
        );
        $fp = fopen($fname, 'a');
        fputcsv($fp,$student);
        fclose($fp);
    */

    /*
        $data = file($fname);
        print_r($data);
        unset($data[1]); 
        
        $fp = fopen($fname, 'w');
        foreach($data as $line){
            fwrite($fp, $line);
        }

        fclose($fp);
    */
        

?> 