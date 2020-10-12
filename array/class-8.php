<?php 

    $numbers1 = array(1,4,3,66,54,7,23,41,2);
    $numbers2 = array(88,3,21,44,3,1,2,7);

    $fruits1 = array("a"=>"Apple", "b" => "Banana", "c" => "lemon");
    $fruits2 = array("d"=>"pineapple", "b" => "malta", "d" => "grapes", "e" => "lemon");

    $commonN = array_intersect($numbers1, $numbers2);
    $commonF = array_intersect($fruits1, $fruits2);

    print_r($commonN);
    print_r($commonF);

?>