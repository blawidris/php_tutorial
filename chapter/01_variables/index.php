<?php 

# ============== Variables & Data Type ============== #
/*
- Integer
- Float
- Boolean
- String
- Null
- Array
- Object
*/

// Constants Variable
define("PI", 3.14);

$myName = "Idris Lawal"; # string
$mySalary = 20.00; # float
$isOnLeave = false; # boolean
$myAge = 24; # Integer 
$myBrands = array("Nike", "Samsung", "Dell", 10); # index array
$myTechStack = array("PHP" => "HyperText Preprocessor", "JS" => "JavaScript"); # associative array
$hasWife = null;


// Indirect Variable Reference
$user = "Code with Idris";
$$user = "John Doe"; # indirect

// Outputting to the Browser
var_dump($myBrands);
print_r($myTechStack);
echo $myName . PHP_EOL;
echo PI . PHP_EOL;
print($myAge) . PHP_EOL;


