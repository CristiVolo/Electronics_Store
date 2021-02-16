<?php 
  include_once 'header.php';
?>

  <section id="logins">
  <div id="login_form">
      <h2 id="login">Login</h2>
      <form action="includes/login.inc.php" method="post">  <!--User is not actually seeing the file-->
          <p><input type="text" name="uid" placeholder="Username/Email..." required=""></p>
          <p><input type="password" name="pwd" placeholder="Password..." required=""></p>
          <p><button type="submit" name="submit">Log In</button></p>
      </form>
  </div>
  </section>

  <?php
    if(isset($_GET["error"]))
    {
      if($_GET["error"] == "emptyinput")
      {
        echo "<p>Fill in all fields!</p>";
      }
      else if($_GET["error"] == "wronglogin")
      {
        echo "<p>Incorrect credentials!</p>";
      }
    }
  ?>

<?php
  include_once 'footer.php';
?>