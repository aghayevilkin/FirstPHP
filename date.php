<?php

echo "Bugun ".date("Y/m/d")."<br>";
echo "Bugun ".date("Y.m.d")."<br>";

$date=strtotime("12:00 November 08 2001");
echo "Your date of birth: ".date("d-m-Y h:i:sa",$date);

?>