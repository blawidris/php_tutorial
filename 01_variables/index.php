<?php

// comment
// single 
# single 
/*
Multiline comment
*/

/*
==========================  
Variable & Data Type
========================== 
Scalar Types
- String
- Integer
- Boolean
- Float
- Null

Resources
- Array
- Object (OOP)

*/

$variableOne = "Hello world"; # String
$variableTwo = 3; # integer
$variableThree = 10.5; # float
$variableFour = false; # Boolean
$variableFive = null; # null 

/*
====================
Array
====================
- Indexing array
- Associative Array
- Multidimensional Array
*/

// $arr = array();
// $arr1 = [];

// $programmingLanguages = ["PHP", 8.2, 2023, true];
// echo $programmingLanguages[0];
// echo $programmingLanguages[3];

// Multidimensional
// $user = ["idris", 20, false, ["PHP", "JavaScript", 'Vue']];
// echo $user[3][0] . PHP_EOL;

// Associative
$user = [
    "name" => "Idris",
    "age" => 23,
    "isMarried" => false,
    "skills" => ["PHP", "JavaScript", 'Vue']
];

// var_dump($user['skills'][0]);
// print_r($user);

?>