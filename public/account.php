<?php
    session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    
    <title>RenTool | Account</title>
    <style>
        .sidebar-img {
            height: 25px;
        }
        .container {
            padding-top: 5em;
        }
        .tabcontent {
            display: none;
            padding: 6px 12px;
            border-top: none;
        }
    </style>
</head>
<body>
<?php include ("header.php")?>
        <main>
    <div class="container">
        <div class="row">
            <!-- left -->
            <div class="col mt-2">
                <div class="list-group">
                    <button class="list-group-item list-group-item-action active" aria-current="true" onclick="activateTab()"><img src="https://img.icons8.com/small/16/000000/admin-settings-male.png" class="sidebar-img"/> Manage Account</a>
                    <button class="list-group-item list-group-item-action" onclick="activateTab()"><img src="https://img.icons8.com/small/16/000000/user-male-circle.png" class="sidebar-img"/> My Profile</a>
                    <button class="list-group-item list-group-item-action" onclick="activateTab()"><img src="https://img.icons8.com/small/16/000000/address.png" class="sidebar-img"/> Address Book</a>
                    <button class="list-group-item list-group-item-action" onclick="activateTab()"><img src="https://img.icons8.com/small/16/000000/key-exchange.png" class="sidebar-img"/> Lent Items</a>
                    <button class="list-group-item list-group-item-action" onclick="activateTab()"><img src="https://img.icons8.com/small/16/000000/borrow-book.png" class="sidebar-img"/> Borrowed Items</a>
                </div>
            </div>
            <!-- right -->
            <div class="col-sm-8">
            <!-- manage account -->
            <div class="tabcontent" style="display: block;">
                <div class="card mb-4">
                    <div class="card-header"><img src="https://img.icons8.com/ios/50/000000/user-male-circle.png"/> Personal Profile</div>
                    <div class="card-body">
                        <div class="card-text">
                            <b>Full Name: </b><?php echo $_SESSION['user_name']; ?><br>
                            <b>Email: </b><?php echo $_SESSION['user_email']; ?>
                        </div>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-header"><img src="https://img.icons8.com/wired/64/000000/address.png"/> Address Book</div>
                    <div class="card-body">
                        <div class="card-text">
                            <b>Email: </b><?php echo $_SESSION['user_email']; ?><br>
                            <b>Full Name: </b><?php echo $_SESSION['user_name']; ?><br>
                            <b>Phone: </b><?php echo $_SESSION['user_phone']; ?><br>
                            <b>Address: </b><?php echo $_SESSION['user_address']; ?>
                        </div>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-header"><img src="https://img.icons8.com/wired/64/000000/sell-property.png"/> Recently Borrowed/Lent</div>
                    <div class="card-body">
                        <div class="card-text">
                        <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Item #</th>
                                        <th scope="col">Lent On</th>
                                        <th scope="col">Returned On</th>
                                        <th scope="col">Items</th>
                                        <th scope="col">Total</th>
                                    </tr>
                                </thead>
                                <tbody id="lent-info">
                                    <!-- EXAMPLE -->
                                    <tr>
                                        <td scope="row">53423</th>
                                        <td>05/06/2021</td>
                                        <td>05/08/2021</td>
                                        <td>Crimping Tool</td>
                                        <td>35.00</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- my profile -->
            <div class="tabcontent">
                <div class="card">
                <div class="card-header"><img src="https://img.icons8.com/ios/50/000000/user-male-circle.png"/> Personal Profile</div>
                    <div class="card-body">
                        <div class="card-text px-4 py-4">
                            <div class="row mb-5">
                                <div class="col"><b>Full Name: </b><br><?php echo $_SESSION['user_name']; ?><br></div>
                                <div class="col"><b>Email: </b><br><?php echo $_SESSION['user_email']; ?><br></div>
                                <div class="col"><b>Phone: </b><br><?php echo $_SESSION['user_phone']; ?></div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <button class="btn btn-secondary me-2">EDIT PROFILE</button>
                                    <button class="btn btn-secondary">CHANGE PASSWORD</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="margin-bottom: 17.6em;"></div>
            </div>
            <!-- address book -->
            <div class="tabcontent">
            <div class="card">
                <div class="card-header"><img src="https://img.icons8.com/wired/64/000000/address.png"/> Address Book</div>
                    <div class="card-body">
                        <div class="card-text px-4 py-4">
                            <div class="row mb-5">
                                <div class="col"><b>Full Name:</b><br> <?php echo $_SESSION['user_name']; ?></div>
                                <div class="col"><b>Address: </b><br><?php echo $_SESSION['user_address']; ?> </div>
                                <div class="col"><b>Phone: </b><br><?php echo $_SESSION['user_phone']; ?></div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <button class="btn btn-secondary">EDIT ADDRESS BOOK</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="margin-bottom: 16.8em;"></div>
            </div>
            <!-- lent items -->
            <div class="tabcontent">
                <div class="card">
                    <div class="card-header"><img src="https://img.icons8.com/wired/64/000000/sell-property.png"/> Lent Items</div>
                    <div class="card-body">
                        <div class="card-text px-4 py-4">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Item #</th>
                                        <th scope="col">Lent On</th>
                                        <th scope="col">Returned On</th>
                                        <th scope="col">Items</th>
                                        <th scope="col">Total</th>
                                    </tr>
                                </thead>
                                <tbody id="lent-info">
                                    <!-- EXAMPLE -->
                                    <tr>
                                        <td scope="row">53423</th>
                                        <td>05/06/2021</td>
                                        <td>05/08/2021</td>
                                        <td>Crimping Tool</td>
                                        <td>35.00</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div style="margin-bottom: 17.9em;"></div>
            </div>
            <div class="tabcontent">
                <div class="card">
                    <div class="card-header"><img src="https://img.icons8.com/wired/64/000000/sell-property.png"/> Borrowed Items</div>
                    <div class="card-body">
                        <div class="card-text px-4 py-4">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Item #</th>
                                        <th scope="col">Borrowed On</th>
                                        <th scope="col">Returned On</th>
                                        <th scope="col">Items</th>
                                        <th scope="col">Total</th>
                                    </tr>
                                </thead>
                                <tbody id="lent-info">
                                    <!-- EXAMPLE -->
                                    <tr>
                                        <td scope="row">62534</th>
                                        <td>05/07/2021</td>
                                        <td>05/14/2021</td>
                                        <td>Rice Cooker</td>
                                        <td>120.00</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div style="margin-bottom: 17.9em;"></div>
            </div>
            </div>
        </div>

        </div>
    </div>
    </main>
    <br><br><br><br>
    <?php include ("footer.php")?>
    <script>
    function activateTab() {
        var tabcontent = document.getElementsByClassName("tabcontent");
        for (var p = 0; p < tabcontent.length; p++) {
          tabcontent[p].style.display = "none";
        }
        var tabButton = document.getElementsByClassName("list-group-item list-group-item-action");
        for (p = 0; p < tabButton.length; p++) {
          tabButton[p].className = tabButton[p].className.replace(" active", "");
        }
        var display = Array.prototype.slice.call(tabButton, 0);
        var x = display.indexOf(event.currentTarget);
        tabcontent[x].style.display = "block";
        event.currentTarget.className += " active";
    }
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="../js/script.js"></script>
</body>
</html>