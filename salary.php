<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salary Dashboard</title>
    <link rel="stylesheet" href="css/salarydash_style.css">
</head>
<body>
    <header>
        <div class="logo">
            <img src="images/salary.svg" alt="Logo">
            <h1>Salary Dashboard</h1>
        </div>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Salaries</a></li>
                <li><a href="#">Reports</a></li>
                <li><a href="#">Profile</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h2>Salary Overview</h2>
        <table>
            <thead>
                <tr>
                    <th>Employee Name</th>
                    <th>Current Salary</th>
                    <th>Last Increase</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>John Doe</td>
                    <td>$70,000</td>
                    <td>2024-06-15</td>
                    <td>Reviewed</td>
                </tr>
                <tr>
                    <td>Jane Smith</td>
                    <td>$82,000</td>
                    <td>2024-05-20</td>
                    <td>Pending Review</td>
                </tr>
                <tr>
                    <td>Bob Johnson</td>
                    <td>$65,000</td>
                    <td>2024-07-01</td>
                    <td>Reviewed</td>
                </tr>
                <tr>
                    <td>Lisa White</td>
                    <td>$90,000</td>
                    <td>2024-03-30</td>
                    <td>Pending Review</td>
                </tr>
            </tbody>
        </table>
        
        <button class="apply-button">Apply for Salary Review</button>

         <!-- Salary Review Application Form -->
         <div id="salary-form-container" class="form-container">
            <h3>Salary Review Application</h3>
            <form id="salary-review-form">
                <div class="form-group">
                    <label for="employee-name">Employee Name:</label>
                    <input type="text" id="des" name="employee-name" placeholder="Enter your name" required>
                </div>
                <div class="form-group">
                    <label for="current-salary">Current Salary:</label>
                    <input type="number" id="des" name="current-salary" placeholder="Enter current salary" required>
                </div>
                <div class="form-group">
                    <label for="desired-salary">Desired Salary:</label>
                    <input type="number" id="des" name="desired-salary" placeholder="Enter desired salary" required>
                </div>
                <div class="form-group">
                    <label for="reason">Reason for Increase:</label>
                    <textarea id="des" name="reason" rows="4" placeholder="Explain the reason for the increase" required></textarea>
                </div>
                <button type="submit" class="submit-button">Submit Application</button>
            </form>
        </div>


    </main>

    <footer>
        <p>&copy; 2024 Salary Dashboard. All rights reserved.</p>
    </footer>

</body>
</html>
