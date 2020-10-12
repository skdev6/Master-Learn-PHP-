<?php 

    $persion = array(
        "fname"=>"Hello",
        "lname"=>"World"
    );
    print_r($persion);

    $newpersion = &$persion;

    $newpersion['lname']='khan';

    print_r($newpersion);

    function persionData($persion){
        $persion['fname'] .= ' changed ';
        print_r($persion);
    }

    persionData($persion);

    unset($persion['lname']);
    
    print_r($persion);

?>