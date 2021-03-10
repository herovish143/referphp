<?php
/**
 * 
 * array_diff(arr_from, arr_against1, arr_against2,.... )
 * 
 * array_diff() compare two or more arrays
 * 
 * return the array of values that first array contain but others not contain
 * 
 * introduce in 4.0.1
 * 
 */

$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"green","g"=>"blue");

$arr = array_diff($a1, $a2);

// print_r($arr);

$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"black","g"=>"purple");
$a3=array("a"=>"red","b"=>"black","h"=>"yellow");
$a4 = ["blue"];

$arr = array_diff($a1, $a2, $a3, $a4);

print_r($arr);