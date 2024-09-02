<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Admin Login</title>
</head>
<body>

<header>
   <nav class="nav-display">
      <div class="logo">
        <h1 id="tit">Rel<span class="titty">i</span>ance</h1>
      </div>
   </nav>
</header> 
    
<h1 id="form_hd">Admin Details</h1>
<div class="form-container">
    <form action="includes/login.inc.php"in method="POST">
        <div class="form_input">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>
        </div>
        
        <div class="form_input">
            <label for="password">Password</label>
            <input type="password" id="password" name="pwd" required>
        </div>
        <button id="form_btn" type="submit">Login</button>
    </form>
    <p><a href="forgot-password.php">forgot password?</a></p>
</div>

</body>
</html>
