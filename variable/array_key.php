<?php

$array = ['hoge' => 1];

var_dump(isset($array['hoge']));
// -> true

var_dump(isset($array['Hoge']));
// -> false

var_dump($array['Hoge']);
// -> null
