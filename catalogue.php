<?php
/**
 * Created by PhpStorm.
 * User: Praviin
 * Date: 2/7/16
 * Time: 2:17 PM
 */

?>

<head>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
    <title>
        FIRST CRUD
    </title>
    <!-- Style -- Can also be included as a file usually style.css -->

    <!DOCTYPE html>
    <html>
    <head>

<body style= background-size:100%;background-image:url("http://www.saporinuovi.it/wp-content/uploads/2016/12/christmas-cake-wide-wallpaper-27981.jpg");

</body>
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
                font-size: 60px;
            }

            @media screen and (max-height: 450px) {
                .overlay {overflow-y: auto;}
                .overlay a {font-size: 20px}
                .overlay .closebtn {
                    font-size: 40px;
                    top: 15px;
                    right: 35px;
                }
            }
        </style>
    </head>
<body>

<div id="myNav" class="overlay">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <div class="overlay-content">
        <a href="custom.php">BAKE YOUR OWN CAKE</a>
        <a href="about.php">ABOUT US</a>
        <a href="Catalogue.php">CATALOGUE</a>
        <a href="logout.php">LOG OUT</a>
    </div>
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

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Success</title>
</head>
<body>
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
    echo 'Welcome';
}




?>

</body>
</html>


</html>

    <style type="text/css">
        table.table-style-three {
            font-family: verdana, arial, sans-serif;
            font-size: 11px;
            color: #020d05;
            border-width: 1px;
            border-color: rgba(249, 249, 249, 0);
            border-collapse: collapse;
        }
        table.table-style-three th {
            border-width: 1px;
            padding: 8px;
            border-style: solid;
            border-color: #ff4a24;
            background-color: #72cad5;
            color: #0b0b0b;
        }
        table.table-style-three a {
            color: blue;
            text-decoration: none;
        }

        table.table-style-three tr:hover td {
            cursor: pointer;
        }
        table.table-style-three tr:nth-child(even) td{
            background-color: rgba(255, 82, 216, 0.34);
        }
        table.table-style-three td {
            border-width: 1px;
            padding: 8px;
            border-style: solid;
            border-color: #040400;
            background-color: #ffffff;
        }
    </style>

</head>
<body>

<?php require_once("config.php");

$allrecords = fetchAllUsers();
?>

<!-- Table goes in the document BODY -->
<table class="table-style-three">
    <thead>
    <!-- display user details header  -->
    <th>Order ID</th>
    <th>Icing</th>
    <th>Description</th>
    <th>Weight</th>

    </thead>
    <tbody>
    <?php
    foreach($allrecords as $displayRecords) { ?>
        <tr>
            <td><?php print $displayRecords['orderid']; ?><a href="updateThisUser.php?orderid=<?php print $displayRecords['orderid']; ?>">[ADD TO CART]</a></td>
            <td><?php print $displayRecords['icing']; ?></td>
            <td><?php print $displayRecords['description']; ?></td>
            <td><?php print $displayRecords['Weight']; ?></td>

        </tr>
    <?php } ?>
    </tbody>
</table>

</body>
</html>
