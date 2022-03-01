<?php

function getFullnameFromParts($surname,$name,$patronomic) {
    return $surname.' '.$name.' '.$patronomic;
};

function getPartsFromFullname($fullname) {
$arr = explode(' ',$fullname);
$arr1 = ['surname','name','patronomic'];
$arr_res = array_combine($arr1, $arr);
return $arr_res;
};

$Test1 = getPartsFromFullname($Test);

function getShortName($array) {
unset($array['patronomic']);
$test5 = $array['surname'];
$helper = mb_substr($test5, 0, 1);
$array['surname'] = $array['name'];
$array['name'] = $helper;
$string = implode(' ',$array);
$string .= '.';
return $string; 
};

print_r(getShortName($Test1));

?>