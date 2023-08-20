<?php include('server.php');

    $uName = $_POST['user_name'];
    $password = $_POST['password'];
    
    $sql = "SELECT * FROM `users` WHERE user_name= '$uName' ";
    $query = mysqli_query($conn, $sql);
    $result= mysqli_num_rows($query);
    if($result > 0){
        $row = mysqli_fetch_assoc($query);
        if($password == $row['password']){
            header("Location: dashboard.php");
        }else{
            header('Location: index.php?msg=Password Not Correct');
        }

    }else{
        header('Location: index.php?msg=User Name Not Correct');
    }



?>