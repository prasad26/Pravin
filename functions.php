<?php

function fetchAllUsers() {
    global $mysqli, $db_table_prefix;
    $stmt = $mysqli->prepare(
        "SELECT
         orderid,
         icing,
         description,
         weight

		FROM " . $db_table_prefix . "details
		Where active=1"

    );
    $stmt->execute();
    $stmt->bind_result(
        $orderid,
        $icing,
        $description,
        $weight

    );

    while ($stmt->fetch()) {
        $row [] = array(
            'orderid'                  => $orderid,
            'icing'                    => $icing,
            'description'              => $description,
            'Weight'                   => $weight

        );
    }
    $stmt->close();
    return ($row);
}

//Update selected users record.

function updateThisRecord($orderid, $icing, $description, $weight)
{
    global $mysqli, $db_table_prefix;
    $stmt = $mysqli->prepare(
        "UPDATE " . $db_table_prefix . "details
		SET
		orderid = ?,
		icing = ?,
		description = ?,
        weight = ?,    
		Limit = 1"
    );
    $stmt->bind_param("ssss", $orderid, $icing, $description, $weight);
    $result = $stmt->execute();
    $stmt->close();

    return $result;
}

//fetch this record

function fetchThisUser($orderid,$icing,$description,$weight)
{
    global $mysqli;
    $stmt = $mysqli->prepare(
        "
    SELECT
    orderid,
    icing,
    description,
    weight

    FROM details
    WHERE
    orderid = ?"
    );
    $stmt->bind_param("ssss", $orderid,$icing,$description,$weight);
    $stmt->execute();
    $stmt->bind_result($orderid, $icing, $description, $weight);
    $stmt->execute();
    $row = array();
    while ($stmt->fetch()) {
        $row[] = array(
            'orderid'               => $orderid,
            'icing'                 => $icing,
            'description'           => $description,
            'weight'                => $weight

        );
    }
    $stmt->close();

    return ($row);
}
?>