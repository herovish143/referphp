<?php
/**
 * array_chunk(arr, size, perserve_key?)
 * 
 * array_chunk(arr, size, perserve_key) is used to split an array to chunks of array
 * 
 * there parameter accept ---
 * 
 * 1. array = a valid array
 * 2. size = number
 * 3. perserve_key (optional) = default(false) = true or false
 * 
 */

$cars=array("Volvo","BMW","Toyota","Honda","Mercedes","Opel", "Tata");

print_r(array_chunk($cars,2));

$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43","Harry"=>"50");

print_r(array_chunk($age, 2, true));