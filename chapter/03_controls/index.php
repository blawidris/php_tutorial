<?php

// Control Structure
$score = 97;

# if else elseif

// if ($score >= 80) {
//     echo "A" . PHP_EOL;
// } elseif ($score >= 70) {
//     echo "B" . PHP_EOL;
// } elseif ($score >= 60) {
//     echo "C" . PHP_EOL;
// } else {
//     echo "D" . PHP_EOL;
// }

# Switch

// switch ($score) {
//     case ($score >= 80):
//         echo "A" . PHP_EOL;
//         break;
//     case ($score >= 70):
//         echo "B" . PHP_EOL;
//         break;
//     case ($score >= 60):
//         echo "C" . PHP_EOL;
//         break;
//     default:
//         echo "D" . PHP_EOL;
// }

// $paymentStatuses = [1, 2, 3];

// foreach($paymentStatuses as $paymentStatus){
//     switch ($paymentStatus) {
//         case 1:
//             echo "Paid" . PHP_EOL;
//             break 2; # 2 specify breaking out of both foreach and switch loop
//         case 2:
//         case 3:
//             echo "Payment decline" . PHP_EOL;
//             break 2;
//         default:
//             echo "Unknown payment status" . PHP_EOL;
//     }
// }

# match()
/*
- Performs a strict comparison unlike switch that loosely compare Variables
- can be assign to variable
- 
*/
$paymentStatus = 1;

// echo match ($paymentStatus) {
//     1 => 'Paid',
//     2, 3 => 'Decline',
//     0 => 'Pending',
//     default => 'Unknown status'
// } . PHP_EOL;

# assign match() to variable

$paymentStatusDisplay = match ($paymentStatus) {
    1 => 'Paid',
    2, 3 => 'Decline',
    0 => 'Pending',
    default => 'Unknown status'
} . PHP_EOL;

echo $paymentStatusDisplay;