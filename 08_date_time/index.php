<?php

$currentTime = time();

// echo $currentTime . PHP_EOL; # today
// echo $currentTime + 5 * 24 * 60 * 60 . PHP_EOL; # 5 days time
// echo $currentTime - 60 * 60 * 26 . PHP_EOL; # Yesterday


// echo date('m/d/Y g:ia') . PHP_EOL;
// echo date('m/d/Y g:ia', $currentTime + 5 * 24 * 60 * 60) . PHP_EOL;
// echo date('m/d/Y g:ia', $currentTime - 60 * 60 * 26) . PHP_EOL;

// echo date_default_timezone_get() . PHP_EOL;


// changing timezone
// date_default_timezone_set('UTC');
// echo date('m/d/Y g:ia') . PHP_EOL;
// echo date('m/d/Y g:ia', $currentTime + 5 * 24 * 60 * 60) . PHP_EOL;
// echo date('m/d/Y g:ia', $currentTime - 60 * 60 * 26) . PHP_EOL;
// echo date_default_timezone_get() . PHP_EOL;

// get unix timestamp by calculation
// echo mktime(0,0,0, 12, 32, 1997) .PHP_EOL;

// echo date('d/m/Y g:ia', mktime(0,0,0, 12, 32, 1997)) . PHP_EOL;
// echo date('d/m/Y g:ia', mktime(0,0,0, 13, 2, 1997)) . PHP_EOL;

//  strtotime allow you to parse english textual datetime into unix timestamp
$date = date('d/m/Y g:ia', strtotime('+1 week 3 days 7 hours 5 seconds'));
// echo $date. PHP_EOL;

// print_r(date_parse($date));
print_r(date_parse_from_format('d/m/Y g:ia',$date));