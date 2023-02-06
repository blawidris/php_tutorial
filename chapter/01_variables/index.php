<?php
use function mysql_xdevapi\expression;

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
// define("OPTION", "OPTION");

// define(OPTION . '_1', 'paid');
// echo OPTION_1. PHP_EOL;


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

// $x = null;

// var_dump($x);

// check null Variable
// var_dump(is_null($x)); 
// var_dump($x ===  null); 

// Another way 
// $y = 123;

// var_dump($y);
// unset($y);

// var_dump($y);

# Type casting
// var_dump(intval($x)) . PHP_EOL;
// var_dump((string) $x);
// var_dump((bool) $x);
// var_dump((float) $x);
// var_dump((array) $x);

/* 
============ 
Arrays: is a container that stores list of value of different data types which can be declared using [] or array() function
============ 
*/

// creating array
$programmingLanguages = ["PHP", "Java", "Ruby"];
$primaryColors = array("Red", "Blue", "Green");

// access array using index
// echo $programmingLanguages[0] . PHP_EOL;
// var_dump(isset($programmingLanguages[2]));

// change array value using index
// $programmingLanguages['2'] = "JavaScript";

// add value to an array
// $programmingLanguages[] = "C++"; # add value to the end

// array function
// var_dump(count($programmingLanguages));
// array_push($programmingLanguages, "C#"); # add value from behind
// array_unshift($programmingLanguages, 'python'); # add to beginning

# remove value from behind
// unset($programmingLanguages[4]); 
// array_pop($programmingLanguages);

# remove from beginning
// array_shift($programmingLanguages);

// var_dump(array_key_exists(0, $programmingLanguages));
var_dump($programmingLanguages);



// Associative array allow you to keep track of elements by names rather than by numbers.

# Create an Associative array

// $programmingLanguagesVersion = [
//     "PHP" => 8.0,
//     "Python" => 3.9
// ];

// // access value by key
// var_dump($programmingLanguagesVersion['PHP']);

// // Add new key  
// $programmingLanguagesVersion['go'] = '1.9';

// $newLang = "Rail";
// $programmingLanguagesVersion[$newLang] = '1.9';

// var_dump($programmingLanguagesVersion);


// Multi-dimensional Array

// $programmingLangs = [
//     "PHP" => [
//         "creator" => 'Rasmus Lerdorf',
//         'extension' => '.php',
//         'website' => 'www.php.net',
//         'isOpenSource' => true,
//         'versions' => [
//             ['version' => 8, 'releaseDate' => 'Nov 26, 2020'],
//             ['version' => 7.4, 'releaseDate' => 'Nov 28, 2019']
//         ]
//     ],
//     "Python" => [
//         "creator" => 'Guido Van Rossum',
//         'extension' => '.py',
//         'website' => 'www.python.org',
//         'isOpenSource' => true,
//         'versions' => [
//             ['version' => 3.9, 'releaseDate' => 'Oct 5, 2020'],
//             ['version' => 3.8, 'releaseDate' => 'Oct 14, 2019']
//         ]
//     ],
// ];

// access value
// var_dump($programmingLangs['PHP']);
// var_dump($programmingLangs['PHP']['website']);
// var_dump($programmingLangs['PHP']['versions'][0]);


// $arr = [true => 1, 1 => 2, '1' => 3, null => 4];
// var_dump($arr);
// var_dump($arr['']);

// $array = ['a', 'b', 'c', 5 => 'd', 'e', 'f'];
// var_dump($array);

# Expressions is anything that has a value or evaluate to a value
$x = 5; # expression 
$y = $x; # expression

$z = sum($x + $y); # expression

if($x < 5 /* expression */){
    // statement
}