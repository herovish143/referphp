<?php
/**
 * 
 * array_diff_assoc() ==>>
 * array_diff_assoc() comapre two and more arrays value and keys
 * 
 * return the array of first1 elemnets keys and values that are not contain by others array
 * 
 */
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("a"=>"red","b"=>"green","c"=>"blue");

print_r(array_diff_assoc($a1, $a2));

$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("a"=>"red","f"=>"green","g"=>"blue");
$a3=array("h"=>"red","b"=>"green","g"=>"blue");

print_r(array_diff_assoc($a1, $a2, $a3));