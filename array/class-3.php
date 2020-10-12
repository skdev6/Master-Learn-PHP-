<?php 
$str = "Hello worls, this worls, is not permanents";

$strArray = preg_split('/(, |,)/', $str);

$arraytoStr = join(' ', $strArray);

print_r($strArray);
// echo $arraytoStr;

?>