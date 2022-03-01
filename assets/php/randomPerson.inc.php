<?php

function randomPersonName($array) {
    $randomMax = count($array) - 1;
    $random = rand(0, $randomMax);
    return $array[$random]['fullname'];
};

$Test = RandomPersonName($example_persons_array);
print_r($Test);

?>