<html>
    <head>
        <title>Logout</title>
        <link rel="icon" type="image/png" href="ICONS/contact.png">
    </head>
</html>

<?php

include 'commons.php';

session_start();

if(isset($_COOKIE['userid'])){

    setcookie("userid", "", time() - 3600);
    alert_func("Logout Successfully.");
}

if(isset($_SESSION['userid'])){

    unset($_SESSION['userid']);

    session_destroy();
    alert_func("Logout Successfully.");
}

else{
    alert_func("You Aren't Logged In. You Can't Access This Page.");
} 


redirect_func("index.php");

?>
