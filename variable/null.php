<?php

$result = null == null;
echo "null == null is {$result}\n";

$result = 0 == null;
echo "0 == null is {$result}\n";

$result = '' == null;
echo "'' == null is {$result}\n";

$result = 0 === null;
echo "0 === null is {$result}\n";

$result = is_null(0);
echo "is_null(0) is {$result}\n";

