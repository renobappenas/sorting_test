<?php

$list_of_integer = array(9, 23, 4, 17, 8, 2, 3);

function main($list_of_integer)
{
    $n = sizeof($list_of_integer);
    for ($i = 0; $i < $n; $i++) {
        $lowestValueIndex = $i;
        $lowestValue = $list_of_integer[$i];
        for ($j = $i + 1; $j < $n; $j++) {
            if ($list_of_integer[$j] < $lowestValue) {
                $lowestValueIndex = $j;
                $lowestValue = $list_of_integer[$j];
            }
        }

        $list_of_integer[$lowestValueIndex] = $list_of_integer[$i];
        $list_of_integer[$i] = $lowestValue;
    }

    return $list_of_integer;
}

echo json_encode(main($list_of_integer));
