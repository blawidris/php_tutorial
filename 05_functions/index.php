<?php

declare(strict_types=1);
/*
===========
Function
===========
*/

# create function

// function name()
// {
//     echo "Idris";
// }

// name();

# add parameters
// function greet(string $name){
//     return "Welcome $name" . PHP_EOL;
// }

// echo greet('Idris');

# unpack (...)

// function sum(...$numbs): int|float
// {
//     return array_sum($numbs);
// }

// echo sum(1, 2, 4) . PHP_EOL;

# name arguement
// function sumEven(int $x, int $y)
// {
//     if ($x % 2 == 0) {
//         return $x += 1;
//     }else{
//         return $x + $y;
//     }
// }

// echo sumEven(y: 5, x: 3) . PHP_EOL;


/*
===========
Variable function
===========
- It is used to implement callbacks, function tables, etc
- It won't work with language construct such echo, print, unset, isset, empty, include, require, etc
*/

// $x = 'sum';

// if(is_callable($x)){
//     echo sum(1, 2, 4) . PHP_EOL;
// }else{
//     'Not callable';
// }

/*
===========
Anonymous function
===========
- Also known as lamda function or closure
- Can be used as values of Variable
- Can intherit variable from a parent scope using use Keyword
*/

$val = 10;

$sum = function (int|float ...$numbs) use ($val): int|float
{
    array_push($numbs, $val);
    return array_sum($numbs);
};

echo $sum(1, 2, 3, 4) . PHP_EOL;
/*
===========
Keyword return
===========
- Mostly use within a function
- It stop execution of current script therefore any statement after it does not get executed
*/

// function sum($x, $y)
// {
//     $z = $x + $y;

//     return $z;
// }


// $sum = sum(1, 4);

// echo $sum . PHP_EOL;

# tick

// function onTick()
// {
//     echo "Tick" . PHP_EOL;
// }

// register_tick_function("onTick");

// declare(ticks=4);

// $i = 0;
// $length = 10;

// while($i < $length){

//     echo $i++ . PHP_EOL;
// }

# declare

// declare(strict_types=1);