<?php
/**
 * array_combine(keys, values) => array
 * 
 * array_combine(keys, values) are used to create an array by
 * using one array of keys and second array of values.
 * 
 * Creates an array by using one array for keys and another for its values
 * 
 * Both array have same length
 * 
 * if number of elemnt are not same then return False or Warning
 * 
 * introduce in 5+
 * 
 */

$fname=array("Peter","Ben","Joe");
$age=array("35","37","43");

print_r(array_combine($fname, $age));