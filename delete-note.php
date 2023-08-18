<?php
    include('server.php');
    $id = $_POST['note_id'];
    $sql= "DELETE FROM notes WHERE id = $id";
    $query= mysqli_query($conn, $sql);
    if($query){
        header('Location:all-notes.php?msg=Note Deleted!');
    }else{
        header('Location:all-notes.php?msg=Try Later!');
    }

?>