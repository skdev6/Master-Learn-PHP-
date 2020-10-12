<?php 
    /*
    maltidaimentional appay
    */

    $student  = array(
        "fname"=>'jamal',
        'lname'=>'kamal',
        'age'=>36,
        'class'=>8,
        'section'=>'B'
    );

    echo $student['fname']." and ".$student['lname']."\n";

    printf("%s %s \n", $student['fname'],$student['lname']  );

    // echo serialize($student);

    $newstudent = json_encode($student);

    $jsondata = json_decode($newstudent, true);

    print_r($jsondata);

?>