<?php
function blueOcean($haystack, $pluck)
{
    foreach ($pluck as $pluckItem) {
        foreach (array_keys($haystack, $pluckItem) as $removeIndex) {
            unset($haystack[$removeIndex]);
        }
    }

    return array_values($haystack);
}

// example 1
var_dump(blueOcean([1, 2, 3, 4, 6, 10], [1]));
// should return [2,3,4,6,10] because 1 is present in the second list

// example 2
var_dump(blueOcean([1, 5, 5, 5, 5, 3], [5]));
// should return [1,3] because 5 is present in the second list