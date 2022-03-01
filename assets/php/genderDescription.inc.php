<?php 

$arrFill = [];
for ($i = 0; $i < sizeof($example_persons_array); $i++) {
$arrFill[$i] = array_filter(
	$example_persons_array[$i],
    function ($key) {
        return $key =='fullname';
    },
    ARRAY_FILTER_USE_KEY);
}

$finalArr = [];
for ($j = 0; $j < sizeof($arrFill); $j++ ) {
    $finalArr[$j] = $arrFill[$j]['fullname'];
};


/*
Громоздкая запись перебора массива $finalArr!
$restArr = [];
for ($k = 0; $k < count($finalArr); $k++ ) {
   $restArr[$k] = getGenderFromName($finalArr[$k]);
}*/

foreach($finalArr as $value) {
    $restArr[] = getCheckName($value);
};

//print_r($restArr);

/*
Громоздкая запись перебора массива $restArr!
$menArr = [];
$womenArr = [];
$itArr = [];
for ($z = 0; $z < count($restArr); $z++ ) {
    if ($restArr[$z] > 0):
        array_push($menArr, $restArr[$z]);
    elseif ($restArr[$z] < 0):
        array_push($womenArr, $restArr[$z]);
    else:
        array_push($itArr, $restArr[$z]);
    endif;
}*/

foreach($restArr as $value) {
    if ($value > 0):
        $menArr[] = $value;
    elseif ($value < 0):
        $womenArr[] = $value;
    else:
        $itArr[] = $value;
    endif;
}

$statM = round(count($menArr)/count($restArr)*100, 2);
$statW = round(count($womenArr)/count($restArr)*100, 2);
$statIt = round(count($itArr)/count($restArr)*100, 2);

?>