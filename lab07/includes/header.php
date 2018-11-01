<!DOCTYPE html>
<html>
    <head>
        <!--
            Author: Doug Kirkman
            Date:   10/18/2018
        -->

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title><?php echo $title ?></title>
        <link type="text/css" rel="stylesheet" href="www/css/bookstorestyle.css" />
    </head>

    <body>
        <div id="wrapper">
            <!-- navigation bar -->
            <div id="navbar">
                <a href="index.php">Home</a>  || <a href="books.php">List Books</a> || <a href="game.php" > Game </a> ||
            </div>

            <!-- Logo image and banner text --> 
            <table id="banner">
                <tr>
                    <td>
                        <img src="www/img/bookstore.gif" alt="Bookstore">
                    </td>
                    <td>
                        <div id="maintitle">PHP Online Bookstore</div>
                        <div id="subtitle">Learn how to build an online bookstore <br>with PHP and MySQL</div>
                    </td>
                    <td>
                        <div id="shoppingcart">
                            <a href="showcart.php">
                                <img src='www/img/shoppingcart_full.gif' alt='Shopping cart' style='width: 50px; border: none'><br>
                                3 item(s)
                            </a>
                        </div>
                    </td>
                </tr>
            </table>

            <!-- Main body of content -->
            <div id="mainbody">
                