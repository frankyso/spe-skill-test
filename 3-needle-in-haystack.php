<?php
function findNeedle($haystack, $needle)
{
    $needleIndex = -1;
    foreach ($haystack as $key => $value) {
        if ($value == $needle) {
            $needleIndex = $key;
            break;
        }
    }

    return $needleIndex;
}

var_dump(findNeedle(["red", "blue", "yellow", "black", "grey"], "grey"));