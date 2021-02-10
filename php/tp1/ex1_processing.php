<?php

$fields = ['firstname', 'lastname', 'address', 'town', 'postal'];
$vals = [];

foreach ($fields as $f) {
    if (isset($_GET[$f])) {
        $vals[$f] = $_GET[$f];
    }
}


$str = "<br>Bienvenue, " . $vals['firstname'] . " <b>" . $vals['lastname'] . "</b>.</br><br>Nous avons bien noté que vous habitez" . $vals['address'] . " à " . $vals['town'] . "(" . $vals['postal'] . ")</br>";

echo $str;
