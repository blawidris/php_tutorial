<?php

/*
======================
OPERATORS

** Types **
- Unary Operators: requires 1 value e.g !
- Binary Operators: requires 2 value (most common in php)
    - Arithmetic operators
    - Assignment operators
    - Comparison operators
    - Logical operators:
    - String operators
    - Array operators
    - Error control operators
    - 
- Ternary Operators: requires 3 value
======================
*/

// Arithmetic Operators
// $x = 10;
// $y = 2;

// echo $x + $y .PHP_EOL; # addition
// echo $x - $y .PHP_EOL; # subtraction
// echo $x / $y .PHP_EOL; # division
// echo $x * $y .PHP_EOL; # multiplication
// echo $x % $y .PHP_EOL; # modulo (remainder)
// echo $x ** $y .PHP_EOL; # exponential

// float function
// var_dump(fdiv(10.4, 2.5)); # float division
// var_dump(fmod(10.4, 2.5)); # float modulo

// Assignment operators

// echo PHP_EOL . $x += $y .PHP_EOL; # addition
// echo PHP_EOL . $x -= $y .PHP_EOL; # subtraction
// echo PHP_EOL . $x /= $y .PHP_EOL; # division
// echo PHP_EOL . $x *= $y .PHP_EOL; # multiplication
// echo PHP_EOL . $x %= $y .PHP_EOL; # modulo (remainder)
// echo PHP_EOL . $x **= $y .PHP_EOL; # exponential

// String Operators
// $greet = "Hello";
// echo $greet . " World"; # concatenation
// $greet .= " World";
// echo $greet .PHP_EOL;

// Comparison

// $x = 10;
// $y = 2;

// equal
// var_dump($x == 10); # not strict
// var_dump($x === '10'); # strict

// not equal
// var_dump($y != '2'); # not strict
// var_dump($y !== '2'); # strict

// var_dump($x > $y); # greater than
// var_dump($x < $y); # less than
// var_dump($x >= $y); # greater than or equal to
// var_dump($x <= $y); # less than or equal to
// var_dump($x <=> 10);  # spaceship 0
// var_dump($x <=> 20);  # spaceship -1
// var_dump($x <=> $y);  # spaceship 1

// Ternary Operators
// $x = "Hello World";
// $y = strpos($x, 'H');

// $result = $y === false ? 'H not found' : "H found at index {$y}";
// echo $result . PHP_EOL;

 
// Coalescing Operators
$x = null;

$y = $x ?? "Hello";

print_r($y . PHP_EOL);