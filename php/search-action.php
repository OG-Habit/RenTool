<?php 
    include_once("connection.php");

    $obj = array();
    $message = "No items match!";
    $success = 0;
    $name = trim($_REQUEST['item']);
    $name = strtolower($name);

    $query = "SELECT user_id, item_image, item_name, item_location, item_category, item_about FROM add_item WHERE item_sname LIKE '$name'";
    $stmt = mysqli_query($con, $query);

    if(mysqli_num_rows($stmt) > 0) {
        $success = 1;
        while($row = mysqli_fetch_assoc($stmt)) {
            array_push($obj, $row);
        }
    }

    $retObj = array(
        "data" => $obj,
        "msg" => $message,
        "success" => $success,
    );
    echo json_encode($retObj, JSON_FORCE_OBJECT);

    $con->close();
?>