<?php 
	include_once("connection.php");
	$message = "";
	$isValid = true;
	$status = 400;
	$data = [];

	$email = trim($_REQUEST['email']);
	$password = trim($_REQUEST['password']);

	$stmt = $con->prepare("SELECT * FROM users WHERE user_email = ?");
	$stmt->bind_param("s", $email);
	$stmt->execute();
	$result = $stmt->get_result();
	$obj = mysqli_fetch_object($result);
	$stmt->close();
	if($result->num_rows > 0) {
		$isPassword = password_verify($password, $obj->user_pass);
		if($isPassword == true) {
			$status = 200;
			$message = "Success!";
			$data = $obj;
			$_SESSION['user_email'] = $obj->user_email;
			$_SESSION['user_address'] = $obj->user_address;
			$_SESSION['user_id'] = $obj->user_id;
			$_SESSION['user_name'] = $obj->user_name;
			$_SESSION['user_phone'] = $obj->user_phone;
		} else {
			$message = "Incorrect email or password!";
		}
	} else {
		$message = "Account doesn't exist!";
	}
	
	$myObj = array(
		'status' => $status,
		'data' => $data,
		'message' => $message,
	);
	$myJSON = json_encode($myObj, JSON_FORCE_OBJECT);
	echo $myJSON;

	$con->close();
?>