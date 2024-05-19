<?php

function alert_func($message){

    echo "<script>alert('".$message."');</script>";
}

function redirect_func($location){

    echo "<script>window.location.href = '$location'</script>;";
}

?>