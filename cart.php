<?php
include "includes/dbh.inc.php";
include "header.php";
?>

<div id="prod_list_div">
    <h1 class="section-title" style="margin-top: 100px; color:antiquewhite;"><span>S</span>hopping <span>C</span>art</h1>

    <div style="text-align: center;">
        <form class="buy-bar" method="post" name="buy-bar_form">
            <div>   
                <button style="background-color: black !important;" type="buy" name="buy" class="bttn">&#9756; Buy </button>
            </div>
        </form>
        <form class='remove-bar' method='post' name='delete-bar_form'>
            <div>
               <input class='remove-bar-input' style='height: 53.71px;' type='text' name='write_del' placeholder='Enter product name' required=''>
                <button style='background-color: black !important;' type='remove' name='remove' class='bttn'>&#9756; remove from cart </button>
            </div>
        </form>
    </div>

    <?php

    // Search
    if(isset($_POST['submit']))
    {
        $search_result = mysqli_query($conn, "SELECT * from shopping_cart where categoryCart like '%$_POST[search]%' or prodNameCart like '%$_POST[search]%' or shortDescrCart like '%$_POST[search]%' or price_EuroCart like '%$_POST[search]%'");

        if(mysqli_num_rows($search_result)==false)
        {
            echo "Sorry! No results have been found!";
        }
        else
        {
            echo "<table class='table table-bordered table-hover table-striped table-dark'>";
                echo "<tr =>";
                    echo "<th>"; echo "Category"; echo "</th>";
                    echo "<th>"; echo "Product name"; echo "</th>";
                    echo "<th>"; echo "Description"; echo "</th>";
                    echo "<th>"; echo "Price(€)"; echo "</th>";
                echo "</tr>";

                while($row = mysqli_fetch_assoc($search_result))
                {
                    echo "<tr>";
                    echo "<td>"; echo $row['category']; echo "</td>";
                    echo "<td>"; echo $row['prodName']; echo "</td>";
                    echo "<td>"; echo $row['shortDescr']; echo "</td>";
                    echo "<td>"; echo $row['price_Euro']; echo "</td>";
                    echo "</tr>";
                }
            echo "</table>";
        }
    }
    else
    {
        $result = mysqli_query($conn,"SELECT * FROM `shopping_cart`");

        echo "<table class='table table-bordered table-hover table-striped table-dark'>";
            echo "<tr =>";
                echo "<th>"; echo "Category"; echo "</th>";
                echo "<th>"; echo "Product name"; echo "</th>";
                echo "<th>"; echo "Description"; echo "</th>";
                echo "<th>"; echo "Price(€)"; echo "</th>";
            echo "</tr>";

            while($row = mysqli_fetch_assoc($result))
            {
                echo "<tr>";
                echo "<td>"; echo $row['categoryCart']; echo "</td>";
                echo "<td>"; echo $row['prodNameCart']; echo "</td>";
                echo "<td>"; echo $row['shortDescrCart']; echo "</td>";
                echo "<td>"; echo $row['price_EuroCart']; echo "</td>";
                echo "</tr>";
            }
        echo "</table>";
    }

    // Delete
    if(isset($_POST['remove']))
    {
        if(isset($_SESSION['useruid']))
        {
            mysqli_query($conn, "DELETE FROM shopping_cart WHERE prodNameCart = '$_POST[write_del]';");
        }
    }

    // Buy
    if(isset($_POST['buy']))
    {
        if(isset($_SESSION['useruid']))
        {
            mysqli_query($conn, "DELETE FROM shopping_cart;");
            //$rez = "SELECT FROM users WHERE usersUid = '$_SESSION[useruid]'";
           // $row = mysqli_fetch_row($rez);


            //$object_select = "SELECT FROM products WHERE prodName = '$_POST[select_to_buy]'";
           // $obj = mysqli_fetch_row($object_select);

            //$to = "cristivolo99@gmail.com";
            //$subject = "Acquisition complete!";
            //$msg = "You have bought our product successfully!";
            //$from = "From: cyberdawn2021@gmail.com";

            //mail($to, $subject, $msg, $from);        
        }
    }

    ?>
</div>    
</body>
</html>