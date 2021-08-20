<?php
include 'header.php';

session_start();

$_SESSION["favoriLanguage"]="C#";
$_SESSION["favoriAnimal"]="Snake";

echo "Your favorite language: ".$_SESSION["favoriLanguage"]."<br>";
echo "Your favorite animal: ".$_SESSION["favoriAnimal"]."<br>";

// session_unset();
// session_destroy();

?>
