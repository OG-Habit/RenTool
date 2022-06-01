<?php
    session_start();
    if(isset($_SESSION["user_email"])){
        header("Location: homepage.php");
        exit();
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>RenTool - Signup</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style>
      html, body {
		background-image: url('https://images.unsplash.com/photo-1593018931432-21feca0458c4?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1394&q=80');
		background-repeat: no-repeat;
  		background-attachment: fixed;
		background-size: 100% 100%;
      }
      .card {
        width: 25em;
        margin: 0;
        position: absolute;
        top: 50%;
        left: 50%;
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
      }
    </style>
</head>
<body>
<span class="align-middle">
  <div class="card border-gray shadow">
    <div class="card-header"> <!-- HEADER -->
    	<div class="row justify-content-center px-3"> 
		<img id="logo" src="https://i.ibb.co/KW8LpbF/Ren-Tool-Transparent.png" > </div>
    </div>
    <div class="card-body"> <!-- BODY -->
    <form id="signup" method="post" onsubmit="signup(event)">
      <H2>Sign Up</H2>
        <!-- Name -->
          <div class="pt-4 mb-3">
            <label for="username" class="form-label">Full Name: </label>
            <input type="text" class="form-control" id="InputUsername" name="username" required>
          </div>
      <!-- Email -->
        <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="InputEmail" name="email" required>
      </div>
      <!-- Address -->
      <div class="mb-3">
            <label for="address" class="form-label">Address: </label>
            <input type="text" class="form-control" id="InputAddress" name="address" required>
          </div>
      <!-- Phone -->
      <div class="mb-3">
        <label for="phone" class="form-label">Phone Number</label>
        <input type="tel" class="form-control" id="InputPhone" name="phone" required>
      </div>
        <!-- Password -->
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="InputPassword" name="password" required>
          </div>
        <!-- Sign Up -->
          <div class="mb-4 pt-2">
            <button type="submit" class="btn btn-success" value="Signup">Sign Up</button>
          </div>
        <!-- Log In -->
          <div class="card-footer d-flex flex-row pt-3">
            <p class="my-auto px-4">Already have an account?</p><a class="btn btn-outline-dark" href="login.php">Log In</a>
            </div>
      </form>
    </div>
  </div>
</span>
<script src="../js/script.js"></script>
</body>
</html>