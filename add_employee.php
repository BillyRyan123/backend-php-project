<?php
include'db_conn.php';


if (isset($_POST['submit'])) {
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];

    $sql="INSERT INTO `add_employee`(`id`,`first_name`,`last_name`,`email`,`gender`)
    VALUES (NULL,'$first_name','$last_name','$email','$gender');";

    $result=mysqli_query($conn , $sql);

    if ($result) {
        header("location../employee_table.php?msg=New record created successfully!");

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

    <title>Add Employee</title>
</head>
<body>
    <nav class="navbar navbar-light  justify-content-center fs-3 mb-5" style="background-color:gold;">
        Add New Employee
    </nav>

    <div class="container">
        <div class="text-center mb-3">
            <h3>Add New Employee</h3>
            <p class="text-muted">Complete the form below to add a new employee</p>
        </div>


        <div class="conainer d-flex justify-content-center">
            <form action=""method="post" style="width:50vw; min-width:300px;">
               <div class="row mb-3">
                <div class="col">
                    <label class="form-label" for="">First Name</label>
                    <input class="form-control" type="text" name="first_name" placeholer="Dayyon">
                </div>

                <div class="col">
                    <label class="form-label" for="">Last Name</label>
                    <input class="form-control" type="text" name="last_name" placeholer="Ryan">
                </div>
               </div>

               <div class="mb-3">
               <div class="col">
                    <label class="form-label" for="">Email</label>
                    <input class="form-control" type="email" name="email" placeholer="email@example.com">
                </div>
               </div>

               <div class="form-group mb-3">
                <label>Gender:</label>&nbsp;
                <input type="radio" class="form-check-input" name="gender" 
                id="male" value="male">
                <label for="male" class="form-input-label">Male</label>
                 &nbsp;
                <input type="radio" class="form-check-input" name="gender" 
                id="female" value="female">
                <label for="male" class="form-input-label">Female</label>
               </div>
               

               <div>
                <button type="submit" class="btn btn-dark" name="submit">Save</button>
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