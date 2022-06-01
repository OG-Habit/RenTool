<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../css/header.css">
</head>
<body>
    <header>
        <a href="../public/homepage.php"><img class="logo" src="../img/logo.png" alt="RenTool Logo"></a>
        <ul class="account">
            <li class="account__action account__action--search"><a href="../public/search.php">Search</a></li>
            <?php 
                if(isset($_SESSION["user_email"])) { ?>
                    <li class="account__action"><a href="../public/account.php">My Account</a></li>
                    <li class="account__action"><a href="../public/lend.php">Lend</a></li>
                    <li class="account__action" onclick="logout(event)"><a href="">Logout</a></li>
            <?php } else {  ?>
                    <li class="account__action"><a href="login.php">Log in</a></li>
                    <li class="account__action"><a href="signup.php">Sign up</a></li>
            <?php } ?>
        </ul>
    </header>
</body>
</html>