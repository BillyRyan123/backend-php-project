<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/empdash_style.css"/>
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <title>Employee Dashboard</title>
</head>

<body>
    <header>
        <h1>Employee Dashboard</h1>
    </header>
    <div class="container">
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Profile</a></li>
                <li><a href="#">Attendance</a></li>
                <li><a href="#">Leave Requests</a></li>
                <li><a href="#">Payroll</a></li>
                <li><a href="#">Settings</a></li>
            </ul>
        </nav>
        <main>
            <div class="dashboard-header">
                <div class="welcome">Welcome, Dayyon!</div>
                <form action="includes/logout.inc.php" method="post">
                <button class="logout">Logout</button>
                </form>
            </div>
            <div class="cards">
                <div class="card">
                    <h3>Total Hours Worked</h3>
                    <p>160 hours</p>
                </div>
                <div class="card">
                    <h3>Pending Leave Requests</h3>
                    <p>2 Requests</p>
                </div>
                <div class="card">
                    <h3>Upcoming Meetings</h3>
                    <p>3 Meetings</p>
                </div>
            </div>

            <div class="table-section">
                <h2>Recent Activities</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Activity</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>July 29, 2024</td>
                            <td>Submitted Timesheet</td>
                            <td><span class="status approved">Approved</span></td>
                        </tr>
                        <tr>
                            <td>July 28, 2024</td>
                            <td>Leave Request</td>
                            <td><span class="status pending">Pending</span></td>
                        </tr>
                        <tr>
                            <td>July 27, 2024</td>
                            <td>Completed Project A</td>
                            <td><span class="status approved">Approved</span></td>
                        </tr>
                        <tr>
                            <td>July 25, 2024</td>
                            <td>Team Meeting</td>
                            <td><span class="status approved">Completed</span></td>
                        </tr>
                        <tr>
                            <td>July 24, 2024</td>
                            <td>Submitted Report</td>
                            <td><span class="status rejected">Rejected</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</body>

</html>