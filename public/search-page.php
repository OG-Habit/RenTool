<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RenTool | Search</title>
    <link rel="stylesheet" href="./src/css/search-page.css">
</head>
<body>
    <!-- <?php include ("")?> -->
    <main>
        <section class="search-bar">
            <form action="">
                <input type="text" id="searchbar" onkeyup="myFunction()" placeholder="Enter keyword">

                
                <select name="location" id="">
                    <option value="">Cebu</option>
                    <option value="">Manila</option>
                </select>
                <button>Search</button>
            </form>
        </section>
        <ul id="list">
        <section class="search-results">
            <div class="search-results__item">
                <img src="./src/img/sample.jpg" alt="">
                <li><a href="#"> Tools </a></li>
                <h2>Rating: <span>5</span></h2>
                <h2>Location: <span>Cebu</span></h2>
            </div>
            <div class="search-results__item">
                <img src="./src/img/sample.jpg" alt="">
               <li><a href="#"> Food </a></li>
                <h2>Rating: <span>5</span></h2>
                <h2>Location: <span>Cebu</span></h2>
            </div>
            <div class="search-results__item">
                <img src="./src/img/sample.jpg" alt="">
                <li><a href="#"> Gadgets </a></li>
                <h2>Rating: <span>5</span></h2>
                <h2>Location: <span>Cebu</span></h2>
            </div>
            <div class="search-results__item">
                <img src="./src/img/sample.jpg" alt="">
                <li><a href="#"> Fashion </a></li>
                <h2>Rating: <span>5</span></h2>
                <h2>Location: <span>Cebu</span></h2>
            </div>
            <div class="search-results__item">
                <img src="./src/img/sample.jpg" alt="">
                <li><a href="#"> Transportation </a></li>
                <h2>Rating: <span>5</span></h2>
                <h2>Location: <span>Cebu</span></h2>
            </div>
            <div class="search-results__item">
                <img src="./src/img/sample.jpg" alt="">
                <li><a href="#"> Arts </a></li>
                <h2>Rating: <span>5</span></h2>
                <h2>Location: <span>Cebu</span></h2>
            </div>
           
        </section>
         </ul>
    </main>
    <script>
        function myFunction() {
            var input = document.getElementById('searchbar').value.toUpperCase();
            list = document.getElementById("list").getElementsByTagName('li');
            for (i = 0; i < list.length; i++) {
                a = list[i].getElementsByTagName("a")[0];
                txt = a.textContent || a.innerText;
                if(txt.toUpperCase().indexOf(input) > -1)
                    list[i].style.display = "block";
                else
                    list[i].style.display = "none";
            }
        }
        </script>
    <!-- <?php include ("")?> -->
</body>
</html>