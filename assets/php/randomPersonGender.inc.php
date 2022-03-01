<?php 

function checkIt($str,$arrCheck) {
    $addPart = 0; 
    for ($i = 0; $i < count($arrCheck[0]); $i++) {
        $howMuch = mb_strlen($arrCheck[0][$i]);
        $cuttedStr = mb_substr($str, -$howMuch, $howMuch);
        ($cuttedStr === $arrCheck[0][$i]) ? $addPart--: 0;
    };
    ($addPart != 0 ) ? $addPart = current($arrCheck[1]): 0;
    return $addPart;
}

function getCheckName($array) {
    $arrCheckM = [["в","й","н","ич","ад"],[1]];
    $arrCheckF = [["ва","а","вна"],[-1]];
    $count = 0;
    $newArr = getPartsFromFullname($array);
    $a1 = checkIt($newArr['surname'],$arrCheckM);
    $a2 = checkIt($newArr['surname'],$arrCheckF);
    $a3 = checkIt($newArr['name'],$arrCheckM);
    $a4 = checkIt($newArr['name'],$arrCheckF);
    $a5 = checkIt($newArr['patronomic'],$arrCheckM);
    $a6 = checkIt($newArr['patronomic'],$arrCheckF);
    $count =  $a1 + $a2 + $a3 + $a4 + $a5 + $a6;
    return $count;
}

function getGenderFromName($array) {
    $attempt = getCheckName($array);
    if ($attempt < 0):
        return 'Это женщина!';
    elseif ($attempt > 0):
        return 'Это мужчина!';
    else:
        return 'Невозможно определить!';
    endif;
}

print_r(getGenderFromName($Test));

?>