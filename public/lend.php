<?php
    session_start();
    if(!isset($_SESSION["user_email"])){
        header("Location: homepage.php");
        exit();
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rent | RenTool</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="../js/script.js"></script>
    <style>
        .card {
        width: 45em;
        margin: 50px auto;
      }
    </style>
</head>
<body>
    <?php include("../public/header.php") ?>
    <span class="align-middle">
        <div class="card">
            <div class="card-header"><h3>Lend an Item</h2></div>
            <div class="card-body">
                <form method="POST" id="lend" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="item_name" class="form-label">Item Name:</label>
                        <input type="text" class="form-control" id="item_name" name="item_name" required>
                    </div>
                    <div class="mb-3">
                        <label for="item_image" class="form-label">Insert Image:</label>
                        <input type="file" class="form-control" name="uploadfile" value=""/>
                    </div>
                    <div class="mb-3">
                        <label for="item_location" class="form-label">Location:</label>
                        <input type="text" class="form-control" id="item_location" name="item_location" required>
                    </div>
                    <div class="mb-3">
                        <label for="item_category" class="form-label">Category:</label>
                        <input type="text" class="form-control" id="item_category" name="item_category" required>
                    </div>
                    <div class="mb-5">
                        <label for="item_about" class="form-label">Description:</label>
                        <textarea class="form-control" id="item_about" name="item_about"></textarea>
                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>
                </form>
            </div>
        </div>
    </span>
    <?php include("../public/footer.php") ?>
</body>
</html>