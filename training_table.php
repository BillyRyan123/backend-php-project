<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
     crossorigin="anonymous">

     <!----- Font awesome---->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" 
     crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Training Table </title>
</head>
<body>
    <nav class="navbar navbar-light  justify-content-center fs-3 mb-5" style="background-color:gold;">
        Training Table
    </nav>

   <div class="container">

    <?php
    if(isset($_GET['msg'])){
      $msg=$_GET['msg'];
      echo'
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
            '.$msg.'
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>;
      ';
    }
    
    ?>

     <a href="add_employee.php" class="btn btn-dark mb-3">Add New</a>

     <table class="table table-hover table-center">
        <thead class="table-dark">
            <tr>
            <td scope="col">ID</td>
            <td scope="col">First Name</td>
            <td scope="col">Last Name</td>
            <td scope="col">Training type</td>
            <td scope="col">Gender</th>
            <td scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include'db_conn.php';

            $sql="SELECT * FROM `training`";
            $result=mysqli_query($conn, $sql);
            while($row= mysqli_fetch_assoc($result)){
                ?>
                   <tr>
                    <th><?php  echo $row ['id']?></th>
                    <th><?php  echo $row ['first_name']?></th>
                    <th><?php  echo $row ['last_name']?></th>
                    <th><?php  echo $row ['training_type']?></th>
                    <th><?php  echo $row ['gender']?></th>
                    <td>
                        <a href="edit_training.php?id=<?php echo $row['id']?>" class="link-dark"><i class="fa-solid fa-pen-square  fs-5 me-3"></i></a>
                        <a href="delete_training.php?id=<?php echo $row['id']?>"class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
                    </td>         
                    </tr>
            
                <?php
            }

            ?>
            
        </tbody>
        </table>
   </div>



<!--Bootstrap-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
    crossorigin="anonymous">



</script>
</body>
</html>