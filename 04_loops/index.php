<?php

/* ===== Loops ===== */

$programmingLanguages = ["PHP", "Java", "Ruby"];


# for Loop

// for ($x = 1; $x <= 10; $x++) {
//     echo $x . PHP_EOL;
// }

// $length = count($programmingLanguages);

// for ($i=0; $i < $length; $i++) { 
//     echo $programmingLanguages[$i] . PHP_EOL;
// }

# foreach

// foreach($programmingLanguages as $index => $value){
//     $index += 1;
//     echo "{$index}. $value" . PHP_EOL;
// }

# foreach Associative array
$programmingLanguagesVersion = [
    "PHP" => [7.0, 7.4, 8.0],
    "Python" => 3.9,
];

// foreach ($programmingLanguagesVersion as $key => $value) {
//     if (is_array($value)) {
//         // $length = count($programmingLanguagesVersion);
//         // for ($i=0; $i < $length; $i++) { 
//         //     if($value[$i] === 7.0){
//         //         echo $value[$i] . PHP_EOL;
//         //     }
//         // }
//         $value = implode(",", $value);
//     }

//     // echo "$key: $value" . PHP_EOL;
// }


# While
$i = 1;
// while ($i <= 10) {
//     if ($i % 2 === 0) {
//         echo $i . PHP_EOL;
//     }
//     $i++;
// }

# do while
// do {
//     if ($i % 2 === 0) {
//         echo $i . PHP_EOL;
//     }
//     $i++;
// } while ($i <= 15);

