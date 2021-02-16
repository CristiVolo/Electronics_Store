<?php
include "includes/dbh.inc.php";
include "header.php";
?>

<div id="prod_list_div">
    <h1 class="section-title" style="margin-top: 100px; color:antiquewhite;"><span>L</span>ist of <span>P</span>roducts</h1>

    <div style="text-align: center;">
        <form class="search-bar" method="post" name="search-bar_form">
            <div>
                <input class="search-bar-input" style="height: 53.71px;" type="text" name="search" placeholder="Enter product detail" required="">
                <button style="background-color: black !important;" type="submit" name="submit" class="bttn">&#9756; Search </button>
            </div>
        </form>
        <?php
        if(isset($_SESSION["useruid"]))
        {
            if($_SESSION["useruid"] == "admin")
            {
                echo "<form class='delete-bar' method='post' name='delete-bar_form'>
                    <div>
                        <input class='delete-bar-input' style='height: 53.71px;' type='text' name='write_del' placeholder='Enter product name' required=''>
                        <button style='background-color: black !important;' type='submit_del' name='submit_del' class='bttn'>&#9756; Delete (EXACT NAME REQUIRED) </button>
                    </div>
                </form>";
            }
            else
            {
                echo "<form class='select-to-buy-bar' method='post' name='buy-bar_form'>
                    <div>
                        <input class='buy-bar-input' style='height: 53.71px;' type='text' name='select_to_buy' placeholder='Enter product name' required=''>
                        <button style='background-color: black !important;' type='submit_buy' name='submit_buy' class='bttn'>&#9756; Add product to cart </button>
                    </div>
                </form>";
            }
        }
        ?>
    </div>

    <?php

    // Search
    if(isset($_POST['submit']))
    {
        $search_result = mysqli_query($conn, "SELECT * from products where category like '%$_POST[search]%' or prodName like '%$_POST[search]%' or shortDescr like '%$_POST[search]%' or price_Euro like '%$_POST[search]%'");

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
        $result = mysqli_query($conn,"SELECT * FROM `products`");

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
                echo "<td>"; echo $row['category']; echo "</td>";
                echo "<td>"; echo $row['prodName']; echo "</td>";
                echo "<td>"; echo $row['shortDescr']; echo "</td>";
                echo "<td>"; echo $row['price_Euro']; echo "</td>";
                echo "</tr>";
            }
        echo "</table>";
    }

    // Delete
    if(isset($_POST['submit_del']))
    {
        if(isset($_SESSION['useruid']) && $_SESSION["useruid"] == "admin")
        {
            mysqli_query($conn, "DELETE FROM products WHERE prodName = '$_POST[write_del]';");
        }
    }

    // Buy
    if(isset($_POST['submit_buy']))
    {
        if(isset($_SESSION['useruid']))
        {
            mysqli_query($conn, "INSERT INTO shopping_cart SELECT * FROM products WHERE prodName = '$_POST[select_to_buy]';");        
        }
    }

    ?>
</div>    
</body>
</html>