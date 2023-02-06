<?php

# ============== Constant, Variables & Data Type ============== #

/* 
============ Constant ============ 
A constant is a name that holds a simple value that cannot be changed during the execution of the script
- can be accessed from anywhere in the script
- can be accessed from anywhere in the script
*/
// using define function
// define("STATUS_PAID", 'paid');

// using const keyword
// const PI = 3.14;

// print
// echo PI . PHP_EOL;

// check if const as been defined
// var_dump(defined('STATUS_PAID'));

// using define function with control statement 
// if(!defined("STATUS_PAID")){
//     define("STATUS_PAID", 'paid');
// }
// echo STATUS_PAID . PHP_EOL;

// Create Prefix with define function
define("OPTION", "OPTION");

define(OPTION . '_1', 'paid');
echo OPTION_1. PHP_EOL;


/*
==============
List of Data Type 
- String
- Integer
- Float
- Boolean
- Null
- Array
- Object
==============
*/

/* 
============ 
String: is a sequence of characters surrounded by single quotes or double quotes

* String Literal
- single quote('') 
- double quote ("")
- Heredoc
- Nowdoc
============ 
*/

// $firstName = "Idris";
// $lastName = 'Lawal';

//  String Concatenation
// $name = $firstName . " " . $lastName;

// Variable interpolation 
// $name = "{$firstName} $lastName"; # with curly braces
// echo $name . PHP_EOL;
// echo "My first name is $firstName" . PHP_EOL; # without curly braces

// Access String Character via index
// echo $name[1] . PHP_EOL; # from the beginning
// echo $name[-2] . PHP_EOL; #  the end

// Heredoc
// $text = <<<TEXT
// $firstName said "PHP is awesome".
// "Of course" $lastName agreed."
// TEXT;

//  Nowdoc
// $text = <<<'TEXT'
// "PHP is awesome".
// "Of course" I agreed."
// TEXT;

// echo nl2br($text) . PHP_EOL;

/* 
============ 
Integer: are numbers without decimal points 
============ 
*/
// $x = 10; # base 10
// $y = 0x1A; # hexadecimal
// $z = 055; # octal number
// $g = 0b10; # binary 

// Integer overflow then turn float
// $h = PHP_INT_MAX + 1;

// Output
// var_dump($x);
// var_dump($y);
// var_dump($z);
// var_dump($g);
// var_dump($h);

# Type casting
// var_dump(intval(true)) . PHP_EOL;
// var_dump((integer) false);
// var_dump((int) 15.5);
// var_dump((int) "5");

// using underscore (_)
// $j = 100_000;

// var_dump($j);

/* 
============ 
Float: are numbers with decimal points also known as floating-point

- PHP supports the floating-point numbers in scientific notation e.g 0.125E1 // 0.125 * 10^1 or 1.25
============ 
*/

// $x = 13_000.05;
// $x = floor((0.1 + 0.7) * 10);
// $x = ceil((0.1 + 0.3) * 10);

// $x = PHP_FLOAT_MAX * 2;

// var_dump(is_infinite($x));
// var_dump(is_finite($x));
// var_dump(is_nan(log(-1)));
// echo $x . PHP_EOL;

# Type casting
// $y = 10;
// $z = "15.10";

// var_dump(floatval($y)) . PHP_EOL;
// var_dump((float) $z);



/* 
============ 
Null: 
============ 
*/

$x = null;

var_dump($x);

// check null Variable
var_dump(is_null($x)); 
var_dump($x ===  null); 

// Another way 
// $y = 123;

// var_dump($y);
// unset($y);

// var_dump($y);

# Type casting
var_dump(intval($x)) . PHP_EOL;
var_dump((string) $x);
var_dump((bool) $x);
var_dump((float) $x);
var_dump((array) $x);