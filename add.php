<?php
include "includes/dbh.inc.php";
include "header.php";
?>

<div id="add_product_div">
    <div class="add_product_div_container">
        <h1 class="section-title" style="margin-top: 100px;"><span>A</span>dd <span>a</span> <span>N</span>ew <span>P</span>roduct</h1>
        <form class="" action="" method="post">
            <input style="margin-left: 610px; text-align: center; border: solid; border-radius: 4px; margin-top: 40px; background-color: #cee8f8;" type="text" name="category" class="add_form" placeholder="Product Category" required="">
            <input style="margin-left: 610px; text-align: center; border: solid; border-radius: 4px; margin-top: 20px; background-color: #cee8f8;" type="text" name="prodName" class="add_form" placeholder="Component Name" required="">
            <input style="margin-left: 610px; text-align: center; border: solid; border-radius: 4px; margin-top: 20px; background-color: #cee8f8;" type="text" name="shortDescr" class="add_form" placeholder="Description" required="">
            <input style="margin-left: 610px; text-align: center; border: solid; border-radius: 4px; margin-top: 20px; background-color: #cee8f8;" type="text" name="price_Euro" class="add_form" placeholder="Price(€)" required="">
            <button style="background-color: black !important; margin-left: 585px; margin-top: 30px;" type="submit" name="submit" class="bttn">Submit product </button>
        </form>
    </div>
    <?php
        if(isset($_POST['submit']))
        {
            if(isset($_SESSION["useruid"]) && $_SESSION["useruid"] == "admin")
            {
                mysqli_query($conn, "INSERT INTO products VALUES ('$_POST[category]', '$_POST[prodName]', '$_POST[shortDescr]', '$_POST[price_Euro]')");
            }
        }
    ?>
</div>