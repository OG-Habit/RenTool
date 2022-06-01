<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RenTool | Search</title>
    <link rel="stylesheet" href="../css/search.css">
</head>
<body>
    <?php include ("../public/header.php")?>
    <main>
        <section class="search-bar">
            <form id="searchForm" action="">
                <input type="text" id="searchbar" name="item" placeholder="Enter name of item..." required>
                <!-- <select name="location" id="">
                    <option value="">Cebu</option>
                    <option value="">Manila</option>
                </select> -->
                <button>Search</button>
            </form>
        </section>
        <h1 class="search-results-text" id="user-input"></h1>
        <section id="searchResults" class="search-results">
        </section>
    </main>
    <?php include ("../public/footer.php")?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="../js/script.js"></script>
</body>
</html>