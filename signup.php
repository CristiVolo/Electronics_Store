<?php 
  include_once 'header.php';
?>

  <section id="signups">
  <div id="signup_form">
      <h2 id="signup">Sign Up</h2>
      <form action="includes/signup.inc.php" method="post">  <!--User is not actually seeing the file-->
          <p><input type="text" name="name" placeholder="Full name..." required=""></p>
          <p><input type="text" name="email" placeholder="Email..." required=""></p>
          <p><input type="text" name="uid" placeholder="Username..." required=""></p>
          <p><input type="password" name="pwd" placeholder="Password..." required=""></p>
          <p><input type="password" name="pwdconfirm" placeholder="Confirm password..." required=""></p>
          <p><button type="submit" name="submit">Sign Up</button></p>
      </form>
  </div>
  <?php
    if(isset($_GET["error"]))
    {
      if($_GET["error"] == "emptyinput")
      {
        echo "<p>Fill in all fields!</p>";
      }
      else if($_GET["error"] == "invaliduid")
      {
        echo "<p>Choose a proper username!</p>";
      }
      else if($_GET["error"] == "passwordsdonotmatch")
      {
        echo "<p>Passwords do not match!</p>";
      }
      else if($_GET["error"] == "stmtfailed")
      {
        echo "<p>Something went wrong, try again!</p>";
      }
      else if($_GET["error"] == "usernametaken")
      {
        echo "<p>Username already taken!</p>";
      }
      else if($_GET["error"] == "none")
      {
        echo "<p> You have signed in!</p>";
      }
    }
  ?>
  </section>

  

<?php
  include_once 'footer.php';
?>