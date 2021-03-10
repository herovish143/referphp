<?php 
/**
 * array_column(arr, column_key, index_key)
 * 
 * array_column() return the values from the single column of an array(multi-dimensions) or recordset
 * 
 * introduce in php 5.5+
 * upgrade in php 7.0 that it works for array off objects
 * 
 * array_column(arr, column_key, index_key)
 */

$a = array(
    array(
      'id' => 5698,
      'first_name' => 'Peter',
      'last_name' => 'Griffin',
    ),
    array(
      'id' => 4767,
      'first_name' => 'Ben',
      'last_name' => 'Smith',
    ),
    array(
      'id' => 3809,
      'first_name' => 'Joe',
      'last_name' => 'Doe',
    )
  );

// print_r(array_column($a, 'last_name'));
$last_name = array_column($a, 'last_name');
// print_r($last_name);

$last_name = array_column($a, 'first_name', 'id');
print_r($last_name);