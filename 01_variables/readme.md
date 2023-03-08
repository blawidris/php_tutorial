# Variables

- A PHP variable is a container that stores a value, such as a number, string, or array.
- It is denoted by a dollar sign ($) and must start with a letter or an underscore
- Then followed by any number of letters, numbers, or underscores.
- PHP variables are case-sensitive i.e $message not equal $MESSAGE or $Message

The value of a variable can be changed, and the same variable can be used to store different values at different times during the execution of a script.

### Variable naming conventions

- Pascal case involves capitalizing first letter of each word e.g $HelloWorld
- Camel case involves using lowercase for the first word e.g $isMarried
- Snake and kebab: using underscore (\_) or dash (-) to differentiate each word e.g $has_job

P.S: php does not support the use of dash to seperate variable name

e.g

'''

<?php 
    $name = "Idris";
    $_user1Score =  20;
?>

'''

## Comment

Comment help provide meaningful information that will help to you and other developer quickly in the future.

It has two categories:

- Single-line comment: it's placed at the end of the line or at the current block. you can use `#` or `//`
- Multi-line comment: as it name implies it allows commenting on multi-line and it start `/*` and ends with `*\`

### How to write meaningful comment

- Let your comment speak for itself without using comment
  _e.g_

```
    $is_completed = true;  // not cryptic name such as $ic = true;
```

- Let the code explain itself rather than using comment

### Constant Variable

Constant variable hold value that cannot be change during execution of script and it can hold numbers, strings and arrays.

- To declare a variable const you can use define() function or const keyword.
- Use the define() function if you want to define a constant conditionally or using an expression.
- Constant variable is case-sensitive and does not require having dollar ($) sign before it's name
- define() can be use to name prefix constant
- Must be declared at the top before other code

e.g

```
// declare variable constant
  define("PI", '3.14'); # 1
  echo PI;

  const WIDTH = 300;

// expression declaration with constant

if(!defined('WIDTH')){
  define('WIDTH');
}

// naming prefix constant

define('USER', "USER");
define(USER."_1" , " Idris");

//
```

## Data Types

Determines the following:

- the type of information a variable can hold

- Operations that can be performed on each variable

- Amount of memory location to be allocated

In PHP, data types is categories into 3 which are;

- Scalar types
  This type of variable can only store a single value such as integer, float, boolean and string

**_string_** is a sequence of character enclosed by single ('') or double ("") quote.

**_Integer_** is a whole number, either positive or negative, without a decimal point. Integers can be written in decimal (base 10), hexadecimal (base 16), or octal (base 8) form.

**_Float_** is a number with a decimal point.

**_Boolean_** A boolean is a data type that can only have two values: true or false.
**Array** is a container that stores variable of same data type

_e.g_

```
  $myName = "Idris Lawal"; // string
  $myAge = 24; // integer (int: decimal)
  $isEmployed = true; # boolean (bool)
  $isMarried= false;
  $myCurrentBalance = 200.44; # float

  # integer
  echo 0x10; // hexadecimal
  echo +010; // octal number

  // Using underscore (_) to make your int / float value readable (from PHP 7.4 above)
  $product_quantity = 1_000;
  $product_price = 12_000.00;

  // Array
  

```

To check if a value is an integer use is_int() built-in function.

PHP consider the ffg as falsy:

- when set value to false
- When string empty "" or "0"
- When variable value = 0;
- When variable value = 0.0
- When an array is empty
- When value = null

### Variable Interpolation

Allow you to place variable inside the string. You can sometimes wrap the variable with curly braces.

_e.g_

```
  $firstName = "Sodiq";

  // without curly braces
  $fullName = "Ade $firstName";

  // with curly braces
  echo "My name is {$fullName}" . PHP_EOL;

```

### Heredoc and NowDoc

These are ways to handle long and multiline string that may contain complex expression or can contain single and double quote without the need to escape them.

** Difference between heredoc and nowdoc
- Heredoc treat strings as if it was enclose with double i.e can have variables between heredoc while nowdoc treat strings as if it was enclose with single quote i.e cannot have variable between

- Nowdoc’s syntax is similar to the heredoc’s syntax except that the identifier which follows the <<< operator needs to be enclosed in single quotes.

*e.g*

```

// Heredoc

<?php

$he = 'Bob';
$she = 'Alice';

$text = <<<TEXT
$he said "PHP is awesome".
"Of course" $she agreed."
TEXT;

echo $text;

// Nowdoc
$str = <<<'IDENTIFIER'
place a string here
it can span multiple lines
and include single quote ' and double quotes "
IDENTIFIER;
```
