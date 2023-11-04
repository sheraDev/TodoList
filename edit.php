<?php
require_once "config/config.php";


$ID=$_GET["id"];
$MSG=htmlspecialchars($_GET["text"]);


if(isset($ID) &&!empty($MSG))
{
    $req = $PDO->prepare("UPDATE `tasks` SET `name`=:MSG WHERE `id`=:id"); 
    $req->execute([
        'MSG' => $MSG,
        'id' => $ID
        ]);
    $req->execute();
}

