<?php
$array2 = array('one', 'three', 'two', 'four', 'five');
foreach ($array2 as $value2) {
    if ($value2 == 'three') {
        echo "Number three found in the second item of array!";
        break;
    }
}
?>