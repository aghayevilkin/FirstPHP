<?php
include 'header.php';
//SetCookies
$username="User";
$defaultuser="Ilkin Aghayev";
setcookie($username, $defaultuser,time()+(86400*30),"/");  // Bir gune beraber dir

?>


<?php

if (!isset($_COOKIE[$username])) {
    echo "Username: ".$username. " Not Found";
}else {
    echo "User: ".$username." Found"."<br>";
    echo "Default User: ".$_COOKIE[$username];
}

?>

</body>
</html>