<?php
/**
 * array_diff_key() ===> compare the keys of two arrays.
 * 
 * return the array of first elements  that keys are not present in any others arrays
 */

$a1=array("a"=>"red","b"=>"green","c"=>"blue");
$a2=array("a"=>"red","c"=>"blue","d"=>"pink");

print_r(array_diff_key($a1, $a2));

$a1=array("a"=>"red","b"=>"green","c"=>"blue");
$a2=array("c"=>"yellow","d"=>"black","e"=>"brown");
$a3=array("f"=>"green","c"=>"purple","g"=>"red");

print_r(array_diff_key($a1, $a2, $a3));  // check keys
print_r(array_diff($a1, $a2, $a3)); // check values
print_r(array_diff_assoc($a1, $a2, $a3)); //check keys and values