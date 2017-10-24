<?php

function argument_num($first, $second) {
    return $first . $second;
}

argument_num(1);
// -> Warning: Missing argument

argument_num(1, 2);
// -> No Error

argument_num(1, 2, 3);
// -> No Error
