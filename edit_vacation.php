<?php
include'db_conn.php';
$id=$_GET['id'];

if (isset($_POST['submit'])) {
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $vacation_type=$_POST['vacation_type'];
    $gender=$_POST['gender'];

    $sql="UPDATE `vacation` SET `first_name`='$first_name', `last_name`= '$last_name',`vacation_type`='$vacation_type',`gender`='$gender' WHERE id=$id";

    $result=mysqli_query($conn , $sql);

    if ($result) {
        header("location../vacation_table.php?msg=Data updated successfully!");

    }else{
        echo"Failed: ". mysqli_error($conn);
    }
}

?>


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

    <title>Edit Vacation</title>
</head>
<body>
    <nav class="navbar navbar-light  justify-content-center fs-3 mb-5" style="background-color:gold;">
         Edit Vacation
    </nav>

    <div class="container">
        <div class="text-center mb-3">
            <h3>Edit Vacation Information</h3>
            <p class="text-muted">Click to update vacation information</p>
        </div>

        <?php
          $id=$_GET['id'];
          $sql="SELECT * FROM `vacation` WHERE id = $id LIMIT 1";
          $result= mysqli_query($conn,$sql);
          $row=mysqli_fetch_assoc($result);
        ?>

        <div class="conainer d-flex justify-content-center">
            <form action=""method="post" style="width:50vw; min-width:300px;">
               <div class="row mb-3">
                <div class="col">
                    <label class="form-label" for="">First Name</label>
                    <input class="form-control" type="text" name="first_name" value="<?php echo$row['first_name']?>">
                </div>

                <div class="col">
                    <label class="form-label" for="">Last Name</label>
                    <input class="form-control" type="text" name="last_name" value="<?php echo$row['last_name']?>">
                </div> 
               </div>

               <div class="mb-3">
               <div class="col">
                    <label class="form-label" for="">Vacation Type</label>
                    <input class="form-control" type="text" name="vacation_type" value="<?php echo$row['vacation_type']?>">
                </div>
               </div>

               <div class="form-group mb-3">
                <label>Gender:</label>&nbsp;
                <input type="radio" class="form-check-input" name="gender" 
                id="male" value="male"  <?php echo($row['gender']=='male')?"check":"";?>>
                <label for="male" class="form-input-label">Male</label>
                 &nbsp;
                <input type="radio" class="form-check-input" name="gender" 
                id="female" value="female"<?php echo($row['gender']=='female')?"check":"";?>>
                <label for="male" class="form-input-label">Female</label>
               </div>
               

               <div>
                <button type="submit" class="btn btn-dark" name="submit">Update</button>
                <a href="index.php" class="btn btn-danger">Cancel</a>
               </div>
            </form>
        </div>

    </div>




<!--Bootstrap-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
    crossorigin="anonymous">



</script>
</body>
</html>