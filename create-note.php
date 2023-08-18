<?php
    include('server.php');
    $title = $_POST['title'];
    $details = $_POST['details'];

    $sql ="INSERT INTO notes (title,description) VALUES ('$title','$details')";
    $query = mysqli_query($conn,$sql);
    if($query){
       header('Location: add-note.php?msg=Note Added!');
    }
    else{
        echo " Notes Not Added";
    }

?>