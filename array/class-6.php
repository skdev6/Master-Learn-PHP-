<?php 

    // $persion = array(
    //     "fname"=>"Hello",
    //     "lname"=>"World"
    // );

    $persion = array("Sumon Khan", "sume", "sharmin", "shahin");

    $newP = array_splice($persion, 1,2);

    print_r($newP);

    print_r($persion);




?>