<?php

require_once "config/config.php";

$ID=$_GET['ID'];
echo $ID;


if(isset($ID))
{
    $req = $PDO->prepare("DELETE FROM `tasks` WHERE `id`=$ID");
    $req->execute();
}

header("location:index.php");

?>