<?php

$fields = ['firstname', 'lastname'];
$vals = [];

foreach ($fields as $f) {
    if (isset($_GET[$f])) {
        $vals[$f] = $_GET[$f];
    }
}

$str = "<br>Prénom : " . $vals['firstname'] . "</br><br>Nom : " . $vals['lastname'] . "</br>";

echo $str;
