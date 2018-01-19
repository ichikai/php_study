<?php

/**
 * Differences in processing speed between `in_array` and `isset` were measured.
 * Result is `in_array` was slower speed than `isset`.
 */

$array1 = [40,41,42,43,44,45,46,47];
$array2 = [40=>true,41=>true,42=>true,43=>true,44=>true,45=>true,46=>true,47=>true,];

$time_start = microtime(true);

for ($i=0; $i < 10000; $i++) {
    in_array(45, $array1);
}

$time = microtime(true) - $time_start;
echo "array1 is {$time} sec\n"; // array1 is 0.0065889358520508 sec

$time_start = microtime(true);

for ($i=0; $i < 10000; $i++) {
    isset($array2[40]);
}

$time = microtime(true) - $time_start;
echo "array2 is {$time} sec\n"; // array2 is 0.00079894065856934 sec

