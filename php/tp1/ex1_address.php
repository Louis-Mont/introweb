<?php

$fields = ['address', 'town', 'postal'];
$vals = [];

foreach ($fields as $f) {
    if (isset($_GET[$f])) {
        $vals[$f] = $_GET[$f];
    }
}

$str = "<br>Vous habitez :</br><br>" . $vals['address'] . "</br><br>" . $vals['postal'] . " " . $vals['town'] . "</br>";

echo $str;
