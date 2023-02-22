<?php

/*
======================
OPERATORS
======================
** Types **
- Unary Operators: requires 1 value e.g !
- Binary Operators: requires 2 value (most common in php)
- Arithmetic operators
- increment & decrement
- Assignment operators
- Comparison operators
- Logical operator
- String operator
- Array operator
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

$x = 10;

// Increment
// echo $x++ . PHP_EOL; # prefix
// echo $x . PHP_EOL; # prefix
// echo ++$x . PHP_EOL; # postfix

// Decrement
// echo --$x . PHP_EOL; # postfix
// $x-- . PHP_EOL; # prefix
// echo $x . PHP_EOL; # prefix

// Assignment operators

$x = 10;
$y = 2;

// echo PHP_EOL . $x += $y .PHP_EOL; # addition
// echo PHP_EOL . $x -= $y .PHP_EOL; # subtraction
// echo PHP_EOL . $x /= $y .PHP_EOL; # division
// echo PHP_EOL . $x *= $y .PHP_EOL; # multiplication
// echo PHP_EOL . $x %= $y .PHP_EOL; # modulo (remainder)
// echo PHP_EOL . $x **= $y .PHP_EOL; # exponential

// String Operators
// $greet = "Hello";
// $time = 10;
// # concatenation
// echo $greet . " World"; 
// $greet .= " World";
// echo $greet .PHP_EOL;
// echo "the time is $time:00pm";

// Comparison
$x = 10;
$y = 2;

// equal
// var_dump($x == '10'); # not strict
// var_dump($x === "10"); # strict

// not equal
// var_dump($y != '2'); # not strict
// var_dump($y !== '2'); # strict

// var_dump($x > $y); # greater than
// var_dump($x < $y); # less than
// var_dump($x >= $y); # greater than or equal to
// var_dump($x <= $y); # less than or equal to
// var_dump($x <=> 20);  # spaceship return -1 if value on right side greater than left
// var_dump($x <=> 10);  # spaceship return 0 if values are equal
// var_dump($x <=> $y);  # spaceship return 1 if the value on the left is greater

// Coalescing Operators
// $x = null;

// $y = $x ?? "Item is empty";

// print_r($y . PHP_EOL);

// Ternary Operators
// $x = "Hello World";
// $y = strpos($x, 'H');

// $result = $y === false ? 'H not found' : "H found at index {$y}";
// echo $result . PHP_EOL;



// @ - Error Operators
// $x = @file(__DIR__.'/foo.txt');
// echo "Found" . PHP_EOL;

// Logical Operators e.g And (&&), OR (||), Not (!), XOR (^)

$x = true;
$y = false;
$z = true;
$q = false;

$username = "blaw";
$password = '123';

# AND or && returns true if all variables are true or false
//if($username == 'blaw' && $password == '123'){
//     print("Username Confirm") . PHP_EOL;
// }else{
//     print("Username invalid") . PHP_EOL;   
// }


# OR or || returns true if any of the variable is true or false
// if($username == 'blaw' || $password == '12'){
//     print("Username Confirm") . PHP_EOL;
// }else{
//     print("Username invalid") . PHP_EOL;   
// }

# XOR return true if any value true and false is all value is true
//if($username == 'blaw' XOR  $password == '12'){
//     print("Username Confirm") . PHP_EOL;
// }else{
//     print("Username invalid") . PHP_EOL;   
// }


// Bitwise Operators (&, |, ^, ~, >>, <<)
// $x = 6;
// $y = 3;

/*
== calculation ==
- convert variables to Binary
6 = 110
&
3 = 011
------
010 = 2
*/

# & performs && logic
// var_dump($x& $y); # return 2

/*
== calculation ==
- convert variables to Binary
6 = 110
|
3 = 011
------
111 = 7
*/
# | performs || logic
// var_dump($x | $y); # return 7

# ^ performs XOR logic

/*
== calculation ==
- convert variables to Binary
6 = 110
^
3 = 011
------
5 = 101
*/
// var_dump($x ^ $y);

# negation (~) - flips bit

// var_dump(~$x); # return -7
// var_dump(~$y); # return -4

/*
6 = ~ 110 = 001
&
3 = 011
------
1 = 001
*/
// var_dump(~$x& $y); # return 1


# << multiply value 2
/*
6 = 110 
<<
------
48 = 11000
*/
// var_dump($x << $y); # return 48

# >> divide value 2
/*
6 = 110 
>>
3 = 011
------
0
*/
// var_dump($x >> $y); # return 0

// Array Operators (+, ==, ===, !==, <>, !=)
// $a = [1, 2, 3];
// $b = [4, 5, 6, 7, 8];
// $d = ["a" => 1, 'b' => 2, 'c' => 3];
// $e = ["a" => 1, 'b' => 2, 'c' => 3];

# Union operators (+)
// $z = $b + $a; # check index/key exists then merge if doesn't

// var_dump($z);
// var_dump($a == $b); # return true if key-value pair match
// var_dump($d === $e); # return true if key-value pair match and are in same order
