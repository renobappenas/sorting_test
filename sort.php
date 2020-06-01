
<?php

$list_of_integer = array(9, 23, 4, 17, 8, 2, 3);

function main($list_of_integer)
{
    sort($list_of_integer);
    return $list_of_integer;
}

echo json_encode(main($list_of_integer));
