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
// $x = null;

// $y = $x ?? "Hello";

// print_r($y . PHP_EOL);

// @ - Error Operators
// $x = @file('foo.txt');

// increment operators

// $x = 5;

// echo ++$x . PHP_EOL; # prefix increment/decrement returns value of a variable after it has been incremented;

// echo $x++ . PHP_EOL; # postfix increment/decrement returns value of a variable before it has been incremented;
// echo $x . PHP_EOL;

// echo --$x . PHP_EOL;
// echo $x-- . PHP_EOL;
// echo $x . PHP_EOL;

// Logical Operators

// $x = true;
// $y = false;
// $z = true;
// $q = false;

# AND or && returns true if all variables are true or false
// var_dump($x && $y);  # false
// var_dump($x && $z);  # true
// var_dump($y AND $q); # false

# OR or || returns true if any of the variable is true or false
// var_dump($x || $y); # true
// var_dump($x || $z); # true 
// var_dump($q OR $y); # false

# XOR return true if any value true and false is all value is true
// var_dump($x xor $y);


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
$a = [1, 2, 3];
$b = [4, 5, 6, 7, 8];
$d = ["a" => 1, 'b' => 2, 'c' => 3];
$e = ["a" => 1, 'b' => 2, 'c' => 3];

# Union operators (+)
$z = $a + $b; # check index/key exists then merge if doesn't
// var_dump($z);
// var_dump($a == $b); # return true if key-value pair match
// var_dump($d === $e); # return true if key-value pair match and are in same order
