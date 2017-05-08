
<!DOCTYPE html>
<html lang="en">

<body style=background-size:100%;background-image:url("https://s-media-cache-ak0.pinimg.com/originals/be/28/6e/be286e6c5c6e68745d4bad531dc7a1fc.jpg");

</body>

<style>
    body {margin:0;}

    .topnav {
        overflow: hidden;
        background-color: #333;
    }

    .topnav a {
        float: left;
        display: block;
        color: #f2f2f2;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 17px;
    }

    .topnav a:hover {
        background-color: #ddd;
        color: black;
    }

    .topnav a.active {
        background-color: #4CAF50;
        color: white;
    }
</style>
</head>
<body>

<div class="topnav">
    <a class="active" href="index.php">HOME</a>
    <a href="catalogue.php">CATALOGUE</a>
    <a href="custom.php">BAKE YOUR OWN CAKE</a>
    <a href="shoppingcart.php">TRAY</a>
    <a href="logout.php">LOG OUT</a>
</div>

<?php
/**
 * Created by PhpStorm.
 * User: prasa
 * Date: 5/4/2017
 * Time: 12:26 PM
 */

?>
<html>
<head></head>

<body style= background-size:90%;background-image:url("http://youqueen.com/wp-content/uploads/2012/05/Wedding-Cake.jpg");

</body>

<style>
</style>
</head>


<style>
    body {margin:0;}

    .topnav {
        overflow: hidden;
        background-color: #333;
    }

    .topnav a {
        float: left;
        display: block;
        color: #f2f2f2;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 17px;
    }

    .topnav a:hover {
        background-color: #ddd;
        color: black;
    }

    .topnav a.active {
        background-color: #4CAF50;
        color: white;
    }
</style>
</head>
<body>

<div style="padding-left:16px">

</div>




</html>
</style>
<title>A.N.D Cakes</title>
                    <h1><b>Celebrations A.N.D Cakes</b></h1>
    <h2>Welcome to the world of celebrations!!</h2>

<?php
require_once("config.php");


if(!empty($details)){
    echo "Authenticated <br>";
    echo "userid = ". $details['userid']."<br>";
    echo "username = ".$details['username']."<br>";
    echo "firstname = ".$details['firstname']."<br>";
    //print_r($row);
}
else{
    echo '';
}




?>

</body>
</html>