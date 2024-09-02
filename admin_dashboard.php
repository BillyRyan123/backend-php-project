<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/admindash_style.css">
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Admin dashboard</title>
</head>
<body>
    <div class="side-menu">
      
        <ul>
            <li>
                <a href="admin_dashboard.php">
                    <span>
                        <img id="dash" src="images/home.svg" alt="">&nbsp;
                    </span> 
            
                        Home
            
                </a>
            </li>

            <li>
                <a href="hr_dashboard.php">
                    <img id="dash" src="images/hr.svg" alt="">&nbsp; HR
                </a>
            </li>

            <li>
                <a href="employee_dashboard.php">
                    <span>
                        <img id="dash" src="images/employees.svg" alt="">&nbsp; 
                    </span>
                    <span>
                        Employees
                    </span>
                    
                </a>
            </li>
            <li>
                <a href="profile.php">
                    <img id="dash" src="images/hr.svg" alt="">&nbsp; Profile
                </a>
            </li>
            <li>
                <a href="department.php">
                    <img id="dash" src="images/departments.svg" alt="">&nbsp; Department
                </a>
            </li>
            <li>
                <a href="add_vacation.php">
                    <img id="dash" src="images/vacation.svg" alt="">&nbsp; Vacation
                </a>
            </li>
            <li>
                <a href="salary.php">
                    <img id="dash" src="images/salary.svg" alt="">&nbsp; Salary
                </a>
            </li>
            <li>
                <a href="add_training.php">
                    <img id="dash" src="images/training.svg" alt="">&nbsp; Training
                </a>
            </li>
            <li>
                <a href="statistics.php">
                    <img id="dash" src="images/statistics.svg" alt="">&nbsp; Statistics
                </a>
            </li>
            <li>
                <a href="report.php">
                    <img id="dash" src="images/email.svg" alt="">&nbsp; Email
                </a>
            </li>
        </ul>
    </div>

    <div class="container">
      <div class="header">
        <div class="nav">
        <div class="brand_name">
        <h1 id="tit">Rel<span class="titty">i</span>ance</h1>
        </div>
           <div class="search">
            <input type="text" placeholder="Search..">
            <button type="submit"> <img src="images/search.svg" alt="manfying glas"> </button>
           </div>
           <div class="user">
            <a href="add_employee.php" class="btn" onclick="addNewEmployee();" >Add new</a>
            <img src="images/notification-bell.svg" alt="">
            <div class="img-case">
              <img src="images/User.svg" alt="">
            </div>
           </div>
        </div>
      </div>
    </div>



    <div class="content">
        <div class="cards">
            <div class="card">
                <div id="box">
                    <h1>100</h1>
                    <h3>Employees</h3>
                </div>
                <div class="icon-case">
                    <img src="images/statistics.svg" alt="">
                </div>
            </div>
        </div>
        <div class="content-2"></div>
      </div>
    </div>
    
</body>
</html>