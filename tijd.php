<?php
//explode zorgt er voor dat je een string in stukjes kan hakken.
$tijd = explode(" ", $argv[1]);
//forreach is gwn een forloop die door ale waarden van een array door loopt.
foreach ($tijd as $teidInt) {
//substr zorgt er voor dat je zelf kan beslisen welk caracter je uit een stukje string pakt en gebruikt.
    $lastCaracter = substr($teidInt, -1);
//switch is een soort if statement.
switch($lastCaracter) {
    case "s":
        $s = (int)$teidInt;
        break;
    case "m":
        //dit is een manier om min om te rekenen naar sec.
        $m = (int)$teidInt * 60;
        break;
    case "u":
        $u = (int)$teidInt * 60 * 60;
        break;
    case "d":
        $d = (int)$teidInt * 60 * 60 * 24;
        break;
    }
}
//de berekening.
$totaal = $s + $m + $u + $d;
//een echo.
echo "$totaal seconden".PHP_EOL;

