<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <link rel="stylesheet"  href="css/style.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css"> -->
    
    <title>Reliance_home</title>
</head>
<body>
  <header>
   <nav class="nav-display">
      <div class="logo">
        <h1 id="tit">Rel<span class="titty">i</span>ance</h1>
      </div>

      
    <ul class="right-side">
        <li><a href="index.php">Home</a></li>
        <li><a href="blog.php">Blog</a></li>
        <li><a href="developer.php">Developer</a></li>
      </ul>

    
     <select name="dropdown" id="dropdown" onchange="navigateToURL();">
     <option class="opt" value="">Proceed</option>
      <option class="opt" value="employee_login.php">Employee</option>
      <option class="opt" value="admin_login.php">Admin</option>
      <option class="opt" value="hr_login.php">HR</option>
     </select>

     <a href="call.php"><i class="fa-solid fa-phone icon"></i></a>
    </nav>
  </header>
    <main>
      <div class="container">
        <img src="images/rel_svg.avif" alt="finance logo"  width="500" height="500">
      <h1 class="intro_txt">Empowering Your Financial <br> Future with <span class="titty"> Expert</span> Guidance <br> and <span class="titty">Trusted</span> Insights.</h1>
   
    </div>
     <div class="explore">
     <button class="explore_btn"type="submit">Explore</button>
     </div>


    <div class="card_container">

    <div class="card">
        <h2>Card 1</h2>
        <p>This is the content of card 1.</p>
        <a href="#">Read more</a>
    </div>

    <div class="card">
        <h2>Card 2</h2>
        <p>This is the content of card 2.</p>
        <a href="#">Read more</a>
    </div>

    <div class="card">
        <h2>Card 3</h2>
        <p>This is the content of card 3.</p>
        <a href="#">Read more</a>
    </div>
    </div>
    </main>
    
    <footer>
      <p>&copy July 2024</p>
    </footer>





    <script>
      function navigateToURL(){
        let dropdown= document.getElementById("dropdown");
        const url= dropdown.value;

        if(url){
          window.location.href= url;
        }
      }
      document.getElementById("dropdown").addEventListener("change",navigateToURL);
    </script>
</body>
</html>