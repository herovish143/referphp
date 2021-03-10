<?php

/**
 * array_change_key_case() ===>>
 * Change all keys in array to UPPER CASE
 */

$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");

// var_dump($age);
var_dump(array_change_key_case($age, CASE_UPPER));

$pets=array("a"=>"Cat","B"=>"Dog","c"=>"Horse","b"=>"Bird");

var_dump(array_change_key_case($pets, CASE_LOWER));