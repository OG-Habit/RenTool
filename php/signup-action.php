<?php 

	include_once("connection.php");
	$message = "";
    $isValid = true;
    $status = 400;

	$username = trim($_REQUEST['username']);
    $email = trim($_REQUEST['email']);
	$address = trim($_REQUEST['address']);
	$phone = trim($_REQUEST['phone']);
    $password = trim($_REQUEST['password']);

	$stmt = $con->prepare("SELECT * FROM users WHERE user_email = ?");
	$stmt->bind_param("s", $email);
	$stmt->execute();
	$result = $stmt->get_result();
	$stmt->close();
	if($result->num_rows > 0) {
		$isValid = false;
		$message = "Email already exist!";
	}

	if($isValid) {
		$insertToSQL = "INSERT INTO users(user_name, user_email, user_address, user_phone, user_pass) values(?, ?, ?, ?, ?)";
		$stmt = $con->prepare($insertToSQL);
		$password = password_hash($password, PASSWORD_DEFAULT);
		$stmt->bind_param("sssis", $username, $email, $address, $phone, $password);
		$stmt->execute();
		$stmt->close();
		$message = "Account created successfully.";
		// unset($_SESSION['user_email']);
		$status = 200;
	}

	$obj = array(
		'status' => $status,
		'message' => $message
	);

	$myJSON = json_encode($obj, JSON_FORCE_OBJECT);
    echo $myJSON;

    $con->close();
?>

