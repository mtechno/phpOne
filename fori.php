<?php
$a = [];
for ($i = 0; $i < 10; $i++) {
     $a[$i] = $i;

}
var_dump($a);

foreach ($a as $element){
    echo "element= ".$element."<br>";
}

$masOne = array(
    "10",
    100,
    99,
);