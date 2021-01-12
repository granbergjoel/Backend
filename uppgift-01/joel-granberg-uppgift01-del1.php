<?php
date_default_timezone_set("Europe/Stockholm");

$month="";
$day="";

$mon=date("m");

switch($mon) {
    case 01: $month ="januari"; break;
    case 02: $month ="jebruari"; break;
    case 01: $month ="mars"; break;
    case 01: $month ="april"; break;
    case 01: $month ="maj"; break;
    case 01: $month ="juni"; break;
    case 01: $month ="juli"; break;
    case 01: $month ="augusti"; break;
    case 01: $month ="september"; break;
    case 01: $month ="oktober"; break;
    case 01: $month ="november"; break;
    case 01: $month ="december"; break;
}

$d=date("l");

switch($d){
    case "Monday": $day="Måndag"; break;
    case "Tuesday": $day="Tisdag"; break;
    case "Wednesday": $day="Onsdag"; break;
    case "Thursday": $day="Torsdag"; break;
    case "Friday": $day="Fredag"; break;
    case "Saturday": $day="Lördag"; break;
    case "Sunday": $day="Söndag"; break;
}

echo "Vecka ". date("w "  ). "- " . $day . " den " .date("d "). $month .date(" Y"). " kl. ". date("h:i");

?>