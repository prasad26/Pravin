<?php
/**
 * Created by PhpStorm.
 * User: PraviinM
 * Date: 9/28/15
 * Time: 9:54 PM
 */


require_once("config.php");

// print_r is to display the contents of an array() in PHP.
//print_r($_POST);

// Assigning $_POST values to individual variables for reuse.
$orderid = $_POST['orderid'];
$icing = $_POST['icing'];
$description = $_POST['description'];
$weight = $_POST['weight'];


//Creating a variable to hold the "@return boolean value returned by function updateThisRecord - is boolean 1 with
//successfull and 0 when there is an error with executing the query .
$updatedRecord  = updateThisRecord($orderid, $icing, $description, $weight,thisuserid);



//display the result that was returned by the createNewUser function - in this case we usually get a 1 when the
//update is completed successfully.
echo $updatedRecord;
