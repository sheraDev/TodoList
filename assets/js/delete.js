function deleteTask(id)
{

    idTd=document.getElementById("delete_" + id);
    idTd.remove();
  
    return fetch("delete.php?ID=" + id);
}

  