<?php
date_default_timezone_set("Europe/Stockholm");

$days= array("null","Måndag", "Tisdag","Onsdag", "Torsdag", "Fredag","Lördag","Söndag");
$months = array("null","januari", "februari", "mars","april","maj","juni","juli","augusti","september","oktober","november","december");

echo "Vecka ". date("w "  ). "- " . $days[date("w")]. " den " .date("d ").$months[date("n")].date(" Y"). " kl. ". date("H:i");

?>