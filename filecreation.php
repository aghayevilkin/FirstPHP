<?php

$file=fopen("test2.txt","w") or die("Failed to write to file and close");
$text="Ilkin Aghayev";
fwrite($file,$text);
fclose($file);

readfile("test2.txt"); //Sunucuda Var olan Files okur

?>