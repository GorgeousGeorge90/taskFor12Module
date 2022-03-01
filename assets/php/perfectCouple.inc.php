<?php 

function perfectCouple ($array) {
    $person1 = randomPersonName($array);
    $person2 = randomPersonName($array);
    $var1 = getShortName(getPartsFromFullname($person1));
    $var2 = getShortName(getPartsFromFullname($person2));
    $chance = round(lcg_value()*100, 2);
        if (getCheckName($person1) > 0 and getCheckName($person2) < 0) {
            print_r("$var1 + $var2 = Идеально на $chance%");
        } elseif (getCheckName($person1) < 0 and getCheckName($person2) > 0) {
            print_r("$var1 + $var2 = Идеально на $chance%");
        } else {
            perfectCouple($array);
        };
    };

perfectCouple($example_persons_array);


?>