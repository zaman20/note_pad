

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Note - Create Note</title>
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- main css -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 main-container">
                <h2 class="title">My Note </h2>
                <div class="add-new-box">
                    <?php if(isset($_GET['msg'])) { ?>
                        <p class="alert alert-success"><?php echo $_GET['msg']?></p>
                    <?php }?>
                    <h6>Write Note Details</h6>
                    <form action="create-note.php" method="POST">
                        <input type="text" name="title" placeholder="Title" class="form-control my-2">
                        <textarea name="details" class="form-control my-2" cols="30" rows="10">Write details here</textarea>
                        <input type="submit" class="form-control my-2 btn btn-info" value="Create Note">
                    </form>
                </div>

                <?php include('footer.php');?>
            </div>
        </div>
    </div>
</body>
</html>