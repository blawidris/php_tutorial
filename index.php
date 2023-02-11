<?php
// echo "Hello World" . PHP_EOL;


// Outputting to the Browser
// var_dump("Welcome to Laravel");
// print_r("Yellow");
// echo "Testing" . PHP_EOL;
// print('Okay') . PHP_EOL;

function FirstFactorial($num) {

    $i = 1;
    $total = 1;
    // code goes here
    while($num >= $i){
        $total *= $i;
        $i++;
    }
    return $total;
  
  }
     
  // keep this function call here  
  echo FirstFactorial(fgets(fopen('php://stdin', 'r')));  