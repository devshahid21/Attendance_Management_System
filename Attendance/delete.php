<?php

include("../process/connection.php");

authMiddleWare();
roleBaseMiddleWare();

if (isset($_GET["id"])) {
    $id = $_GET["id"];

    $sql = "DELETE FROM attendance WHERE id=$id";
  $result=  mysqli_query($conn, $sql);
}
header("location:" . $GLOBALS['SITE_URL'] . "/attendance/index.php");

exit;

?>

