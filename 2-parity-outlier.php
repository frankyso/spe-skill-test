<?php
function parityOutlier($array)
{
    $evenArray = [];
    $oddArray = [];
    $arrayCount = count($array);

    foreach ($array as $item) {
        if ($item % 2 === 0) {
            // even
            $evenArray[] = $item;
        } else {
            // odd
            $oddArray[] = $item;
        }
    }

    if(count($evenArray) == $arrayCount || count($oddArray) == $arrayCount){
        return "false";
    }

    if(count($evenArray) == 1){
        return $evenArray[0];
    }

    if(count($oddArray) == 1){
        return $oddArray[0];
    }

    return "false";
}

echo parityOutlier([2, 4, 0, 100, 4, 11, 2602, 36]);
// shouud return : 11 (the only odd number)
echo "\n";
echo parityOutlier([160, 3, 1719, 19, 11, 13, -21]);
// should return 160 (the only even number)
echo "\n";
echo parityOutlier([11, 13, 15, 19, 9, 13, -21]);
// shoulld return :false (all odd integer, no outlier)