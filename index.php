<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">


    <link rel="stylesheet" href="assets/css/styles.css">
    <title>TO DO LIST</title>
</head>
<body>


<nav class="navBar">
<h3>
<i class="bi bi-clipboard-plus-fill"></i>
    TO-DO LIST
</h3>

<form action="insert.php" method="GET">
    <div class="container">
        <div class="add">
            <div><input type="text" name ='newTask' class="form-control subTask " autofocus> </div>
            <div><button type="submit" name="add" value="add task" class="form-control addBouton"><i class="bi bi-patch-plus"></i></button></div>
        </div>
    </div>
</form>

</nav>


<?php
include "config/config.php";
$req=$PDO->prepare('SELECT *FROM tasks ORDER BY id desc' );
$req->execute();
?>
   
<div class=" main" >

            <?php
            foreach($req as $data){ ?>
            
            <div class="d-flex p-4 m-2 justify-content-between rounded task" id="delete_<?=$data["id"]?>">

                <p><?php echo $data["id"] ?></p>
                <p id="<?=$data["id"]?>"><?php echo $data["name"]?></p>
            
                 <div>   
                <button onclick="deleteTask(<?=$data['id']?>)" class="btn btn-outline-danger"><i class="bi bi-x"></i></button>
                <button onclick="editAlert(<?=$data['id']?>)" class="btn btn-outline-primary"><i class="bi bi-pen"></i></button>
                 </div>
            </div>

    <?php
    }
    ?>

</div>





<script src="assets/js/sweetalert.js"></script>
<script src="assets/js/editAlert.js"></script>
<script src="assets/js/delete.js"></script>

</body>
</html>