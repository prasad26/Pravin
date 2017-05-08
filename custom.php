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

<body style= background-size:90%;background-image:url("https://image.shutterstock.com/z/stock-photo-birthday-cake-with-candles-on-color-background-274467374.jpg");

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

<div class="topnav">
    <a class="active" href="index.php">HOME</a>
    <a href="custom.php">CATALOGUE</a>
    <a href="custom.php">BAKE YOUR OWN CAKE</a>
    <a href="logout.php">Logout</a>
</div>

<div style="padding-left:16px">

</div>




</html>
</style>
<title>A.N.D Cakes</title>
<h1><center><b>Celebrations A.N.D Cakes</b></center></h1>
<h2><center><b><p class="italic">Bake Your Cake</p></b></center></h2>
<h3><b><center>Its your bakery. Its your cake. Start baking your own cake</center></b></h3>
<body>
<center><b>
Cake Base :</b>
<select>
    <option value="Select">Select</option>}
    <option value="chocolate">Chocolate</option>
    <option value="pineapple">Pineapple</option>
    <option value="rasberry">Rasberry</option>
    <option value="vanilla">Vanilla</option>
    <option value="strawberry">Strawberry</option>
    <option value="chocofudge">ChocoFudge</option>
</select>
<title>Static Dropdown List</title>
<center bgcolor=""><b>
Shape :</b>
<select>
    <option value="Select">Select</option>}
    <option value="heart">Heart</option>
    <option value="circle">Circle</option>
    <option value="square">Square</option>
    <option value="rectangle">Rectangle</option>
</select>
<title>Static Dropdown List</title>
<body bgcolor=""><b>
Icing :</b>
<select>
    <option value="Select">Select</option>}
    <option value="chocolate buttercream">Chocolate Buttercream</option>
    <option value="chocochip">ChocoChip</option>
    <option value="mixedfruit">MixedFruit</option>
    <option value="biscuitcrisp">BiscuitCrisp</option>
    <option value="blueberryocean">BlueberryOcean</option>
    <option value="pinkchampagne">Pink Champagne</option>
</select>
<form action="/action_page.php"><b>
    Happy Birthday:<br>
    <input type="text" name="firstname" value="">
    <br>
    Deliver By:<br>
    <input type="text" name="date" value="">
    <br></b>
<form action="upload.php" method="post" enctype="multipart/form-data">
    <b>Select image for Cake:</b>
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>
  <br>
  <input type="submit" value="Submit">
</form>
</body>
</center>
</body>
</html>
