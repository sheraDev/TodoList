function editAlert(id)
{
    Swal.fire({
        title: 'Enter the new name of the task : ',
        input: 'text',
        background: "#0f172a",
        color:"white",
        
        showCancelButton: true,
        confirmButtonText: 'Edit',
        showLoaderOnConfirm: true,
        
        preConfirm: (editText) => {
          
          if(editText)
          { idTd=document.getElementById(id);
          idTd.innerHTML = editText;
          }
          
          return fetch("edit.php?id=" + id + "&text=" + editText)
            
        },
      })
}