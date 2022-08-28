 <?php
$family = array("father" => "Dilliram", "mother" => "Mina", "son" => "Dipak", "daughter" => "Srijana");
$length = count($family);
$keys = array_keys($family);
// for loop to traverse associative array
for ($i = 0; $i < $length; $i++) {
    echo "<br>" . $keys[$i] . " => " . $family[$keys[$i]];
}
?>