<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Note-1.0</title>
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- main css -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="login-area">
                    <h2 class="title">My Note-1.0</h2>
                    <?php if(isset($_GET['msg'])){?>
                        <p class="alert alert-danger"><?php echo $_GET['msg'];?></p>
                    <?php }?>
                    <form action="create-user.php" method="POST">
                        <input type="text" name="user_name" placeholder="User Name" class="form-control my-2">
                        <input type="email" name="email" placeholder="Your Email" class="form-control my-2">
                        <input type="password"  name="password" placeholder="Password" class="form-control my-2">
                        <input type="submit" value="Register" class="btn my-2 login-btn">
                    </form>
                    <a href="index.php"  class="btn reg-btn">Login</a>
                </div>
                
            </div>
        </div>
    </div>
</body>
</html>