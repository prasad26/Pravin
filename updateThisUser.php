<?php

require_once("config.php");

$thisUserID = $_GET['orderid'];
echo $thisUserID;

$foundUser = fetchThisUser($thisUserID);
echo "<pre>";
  print_r($foundUser);
echo "</pre>";
?>

<html>
<head>
  <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />

  <!-- Style -- Can also be included as a file usually style.css -->
  <style type="text/css">
  table.table-style-three {
    font-family: verdana, arial, sans-serif;
    font-size: 11px;
    color: #333333;
    border-width: 1px;
    border-color: #3A3A3A;
    border-collapse: collapse;
  }
  table.table-style-three th {
    border-width: 1px;
    padding: 8px;
    border-style: solid;
    border-color: #FFA6A6;
    background-color: #D56A6A;
    color: #ffffff;
  }
  table.table-style-three a {
    color: #ffffff;
    text-decoration: none;
  }

  table.table-style-three tr:hover td {
    cursor: pointer;
  }
  table.table-style-three tr:nth-child(even) td{
    background-color: #F7CFCF;
  }
  table.table-style-three td {
    border-width: 1px;
    padding: 8px;
    border-style: solid;
    border-color: #FFA6A6;
    background-color: #ffffff;
  }
</style>

</head>
<body>

<form name="getUserDetails" method="post" action="processUpdateUser.php">
<table class="table-style-three">
  <?php foreach ($foundUser as $userdetails) ?>
  <tr><td>Orderid :</td>      <td><input type="text" name="orderid" value="<?php print $userdetails['orderid']; ?>"></td></tr>
  <tr><td>Icing :</td>       <td><input type="text" name="icing" value="<?php print $userdetails['icing']; ?>"></td></tr>
  <tr><td>Description :</td>  <td><input type="text" name="description" value="<?php print $userdetails['description']; ?>"></td></tr>
    <tr><td>Weight :</td>  <td><input type="text" name="weight" value="<?php print $userdetails['weight']; ?>


    <input type="hidden" name="orderid" value="<?php print $userdetails['orderid'];?>" >

</table>

  <input type="submit" name="submit" value="Update Me">

</form>


</body>

</html>