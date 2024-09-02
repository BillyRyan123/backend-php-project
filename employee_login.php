<?php
      require_once'includes/login_view.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<header>
   <nav class="nav-display">
      <div class="logo">
        <h1 id="tit">Rel<span class="titty">i</span>ance</h1>
      </div>
   </nav>
  </header>

     <body>
     <h1 id="form_hd">Employee Details</h1>
        <div class="form-container">
            <form action="includes/login.inc.php" method="POST">
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
            <p>Not a member? <a href="new_user_login.php">Sign up</a></p>
        </div>
    </div>
      <?php
        check_login_errors();

      ?>
     </body>
</html>