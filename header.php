<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="style.css">
  <title>CyberDawn</title>
</head>
<body>
  <!-- Header -->
  <section id="header">
    <div class="header container">
      <div class="nav-bar">
        <div class="brand">
          <a href="index.php#hero"><h1><span>C</span>yber<span>D</span>awn</h1></a>
        </div>
        <div class="nav-list">
          <div class="hamburger"><div class="bar"></div></div>
          <ul>
            <li><a href="index.php#hero" data-after="Home">Home</a></li>
            <li><a href="index.php#projects" data-after="Products">Products</a></li>
            <li><a href="product_list.php" data-after="Product List">P.List</a></li>
            <li><a href="index.php#about" data-after="About">About</a></li>
            <li><a href="index.php#contact" data-after="Contact">Contact</a></li>
            <?php
              if(isset($_SESSION["useruid"])) 
              {
                echo "<li><a href='includes/logout.inc.php' data-after='Log out'>Log out</a></li>";
                if($_SESSION["useruid"] == "admin")
                {
                  echo "<li><a href='add.php' data-after='Add a Product'>Add</a></li>";
                }
                else
                {
                  echo "<li><a href='cart.php' data-after='Shopping Cart'>Cart</a></li>";
                }
              }
              else
              {
                echo "<li><a href='login.php' data-after='Login'>Login</a></li>";
                echo "<li><a href='signup.php' data-after='Sign Up'>Sign Up</a></li>";
              }
            ?>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- End Header -->