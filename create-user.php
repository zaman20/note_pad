<?php include('server.php');

    $uName = $_POST['user_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users (user_name, password, email) VALUES ('$uName','$password','$email')";
    $query = mysqli_query($conn, $sql);
    if($query){
        header('Location: index.php?msg=Registration Successfull, Login Now!');
    }else{
        header('Location:register.php?msg=Registration Failed, Try Later.');
    }

?>