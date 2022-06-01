<?php
    include_once("connection.php");

    $message = "Error uploading file!";
    $status = 200;

    if(isset($_FILES["uploadfile"])) {
        $separate_imgName = explode(".", basename($_FILES['uploadfile']['name']));
        $user_id = $_SESSION['user_id'];
        
        $item_img = $separate_imgName[0] . $user_id . "." . $separate_imgName[1];
        $item_name = trim($_REQUEST['item_name']);
        $item_sname = strtolower($item_name);
        $item_location = trim($_REQUEST['item_location']);
        $item_category = trim($_REQUEST['item_category']);
        $item_about = trim($_REQUEST['item_about']);
        
        $target = $_SERVER['DOCUMENT_ROOT'] . "/Integration/itemImg/" . $item_img;

        $insertQuery = "INSERT INTO add_item(user_id, item_image, item_name, item_sname, item_location, item_category, item_about) values(?,?,?,?,?,?,?)";
        $stmt = $con->prepare($insertQuery);
        $stmt->bind_param("issssss", $user_id, $item_img, $item_name, $item_sname, $item_location, $item_category, $item_about);
        $stmt->execute();
        $stmt->close();

        if(move_uploaded_file($_FILES['uploadfile']['tmp_name'], $target)) {
            $message = "You have lent an item!";
        } else {
            $message = "Error uploading an item"; 
        }
    }

    $obj = array(
		"status" => $status,
		"message" => $message
	);

    $myJSON = json_encode($obj, JSON_FORCE_OBJECT);
    echo $myJSON;

    $con->close();

    // error_reporting(0);
    // include_once("connection.php");
    
    // $msg = "";
    
    // if (isset($_POST['upload'])) {
    //     $filename = $_FILES["uploadfile"]["name"];
    //     $tempname = $_FILES["uploadfile"]["tmp_name"];    
    //     $folder = "itemImg/".$filename;
    //     $item_name = $_POST["item_name"];
    //     $item_location = $_POST["item_location"];
    //     $item_category = $_POST["item_category"];
    //     $item_about = $_POST["item_about"];
    //     $sql = "INSERT INTO add_item (item_image,item_name,item_location,item_category,item_about) VALUES ('$filename','$item_name','$item_location','$item_category','$item_about')";
        
    //     mysqli_query($con, $sql);
    
    //     if (move_uploaded_file($tempname, $folder))  {
    //         $msg = "Image uploaded successfully";
    //     }
    //     else{
    //     $msg = "Failed to upload image";
    //     }
    // }
?>