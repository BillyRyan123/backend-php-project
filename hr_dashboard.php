<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HR Dashboard</title>
    <link rel="stylesheet" href="css/hrdash_style.css">
</head>
<body>
    <div class="container">
        <aside class="sidemenu">
            <div class="logo">
                <h1>HR Dashboard</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Employees</a></li>
                    <li><a href="#">Attendance</a></li>
                    <li><a href="#">Leave Requests</a></li>
                    <li><a href="#">Payroll</a></li>
                    <li><a href="#">Reports</a></li>
                    <li><a href="#">Settings</a></li>
                </ul>
            </nav>
        </aside>

        <div class="main-content">
            <header class="header">
                <h2>Welcome to the HR Dashboard</h2>
                <div class="user-info">
                    <p>User: HR Manager</p>
                    <form action="includes/logout.inc.php" method="post">
                    <button class="logout">Logout</button>
                </form>
                </div>
            </header>

            <section class="dashboard-content">
                <div class="card">
                    <h3>Total Employees</h3>
                    <p>120</p>
                </div>
                <div class="card">
                    <h3>Pending Leave Requests</h3>
                    <p>5</p>
                </div>
                <div class="card">
                    <h3>Attendance Rate</h3>
                    <p>95%</p>
                </div>
                <!-- Add more cards as needed -->
            </section>
        </div>
    </div>
</body>
</html>

