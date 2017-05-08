<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>

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


<head>
    <style>
        body {
            margin: 0;
            font-family: 'Lato', sans-serif;
        }

        .overlay {
            height: 0%;
            width: 100%;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: rgb(0,0,0);
            background-color: rgba(0,0,0, 0.9);
            overflow-y: hidden;
            transition: 0.5s;
        }

        .overlay-content {
            position: relative;
            top: 25%;
            width: 100%;
            text-align: center;
            margin-top: 30px;
        }

        .overlay a {
            padding: 8px;
            text-decoration: none;
            font-size: 36px;
            color: #818181;
            display: block;
            transition: 0.3s;
        }

        .overlay a:hover, .overlay a:focus {
            color: #f1f1f1;
        }

        .overlay .closebtn {
            position: absolute;
            top: 20px;
            right: 45px;
            font-size: 80px;
        }

        @media screen and (max-height: 450px) {
            .overlay {overflow-y: auto;}
            .overlay a {font-size: 80px}
            .overlay .closebtn {
                font-size: 40px;
                top: 15px;
                right: 35px;
            }
        }
    </style>
</head>
</body>

<div id="myNav" class="overlay">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    < class="overlay-content">
        <a href="login.php" >LOGIN</a>
        <a href="contact.html">ABOUT US</a>
        <a href="contact.html">VISIT US</a>

    </>
</div>


<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; OO</span>

<script>
    function openNav() {
        document.getElementById("myNav").style.height = "100%";
    }

    function closeNav() {
        document.getElementById("myNav").style.height = "0%";
    }
</script>



<body>
<?php
require_once ("config.php");
?>

<form  align="center",method="POST" action="myaccount.php">
    Username: <br>
    <input type="text" name="username"> <br>
    Password : <br>
    <input type="password" name="password"> <br>
    <input type="Submit" value="Login">

</form>
</body>
</html>