<?php

try {
    $db = new PDO("mysql:host=localhost;charset=utf8",'root','');
    echo "Connection successful";
} catch (PDOException $e) {
    echo $e->getMessage();
}

?>