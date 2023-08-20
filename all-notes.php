
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyNote-All Notes</title>
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
                <h2 class="title">My Note <sub>all notes are here...</sub> </h2>
                <?php if(isset($_GET['msg'])){?>
                    <p class="alert alert-danger"><?php echo $_GET['msg'];?></p>
                <?php }?>
                <div class="add-new-box">
                    <!-- php code -->
                    <?php 
                        include('server.php');
                        $sql = "SELECT * FROM `notes`";
                        $query = mysqli_query($conn, $sql);
                        $result= mysqli_num_rows($query);
                        $count =0;
                    ?>
                    <table class="table table-warning table-striped">
                        <?php if($result>0){?>
                            <tr>
                                <th>SL</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Date & Time</th>
                                <th>Action</th>
                            </tr>

                        <?php while($row = mysqli_fetch_assoc($query)){ 
                            $count++; ?>
                            <tr>
                                <td><?php echo $count;?></td>
                                <td><?php echo $row['title'];?></td>
                                <td width="40%"><?php echo $row['description'];?></td>
                                <td><?php echo $row['date'];?></td>
                                <td>
                                    <a href="#" class="btn btn-dark edit-btn" data-id="<?php echo $row['id'];?>"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <a href="#" class="btn btn-danger dlt-btn" data-id="<?php echo $row['id'];?>"><i class="fa-solid fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php }
                        }else{
                            echo "Nothing Here!!!!!";
                        }
                        ?>
                    </table>
                </div>

               <?php include('footer.php');?>
            </div>
        </div>
    </div>

<!-- =========================Note Delete Form=========================================== -->
        <form action="delete-note.php" method="POST" id="deleteForm">
            <input type="hidden" val="" name="note_id" id="noteID">
        </form>
<!-- =====================Note Edit Form================================================= -->
        <form action="edit-note.php" method="GET" id="editForm">
            <input type="hidden" val="" name="note_id" id="nID">
        </form>
<!-- ==================================================================================== -->


    <!-- java script file -->
    <script src="js/jquery-3.6.4.min.js"></script>
    <script src="js/myScript.js"></script>
</body>
</html>