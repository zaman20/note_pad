<?php
    include('server.php');
    $title = $_POST['title'];
    $details = $_POST['details'];
    $id = $_POST['nId'];

    $sql ="UPDATE notes SET title ='$title', description= '$details' WHERE id = $id";
    $query = mysqli_query($conn,$sql);
    if($query){
       header("Location: edit-note.php?note_id=$id & msg=Note Updated!");
    }
    else{
        echo " Notes Not Updated";
    }

?>