<?php
require_once("config/config.php");
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);





if(isset($_GET["add"]) && !empty($_GET["newTask"]))
{
    
    
    $newTask=htmlspecialchars($_GET["newTask"]);
   
    $res=$PDO->prepare("INSERT INTO `tasks`(name) VALUES (:newTask)");
                
    $res->execute(array
                    (
                    "newTask"=>$newTask
                    )
                );

   


}

header("Location: index.php");


