<?php
$family = array("father" => "Dilliram", "mother" => "Mina", "son" => "Dipak", "daughter" => "Srijana");
//foreach method traverse the associative array
foreach ($family as $key => $value) {
    echo $key . ' is ' . $value;
    echo '<br>';
}
?>