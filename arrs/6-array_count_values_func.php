<?php
/**
 * array_count_values($arr) count the values of an array
 * 
 * return an associative array, 
 * which keys are original value ,
 * values are the number of occurence
 * 
 */

$a=array("A","Cat","Dog","A","Dog");

print_r(array_count_values($a));