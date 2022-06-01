var xhttp = new XMLHttpRequest();

function signup(e) {
    let data = $("#signup").serialize();
    $.ajax({
        type : 'POST',
        url : '../php/signup-action.php',
        data : data,
        success: function(response) {
            let res = JSON.parse(response);
            alert(res["message"]);
            if(res["status"] == 200) {
                $('#signup')[0].reset();
            }
        }
    });
    e.preventDefault();
}

function login(e){
    let url = "../php/login-action.php";
    let data = $("#loginForm").serialize();
    let urlData = url+"?"+data;
    xhttp.open("GET", urlData, true);
    xhttp.send();
    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            let res = JSON.parse(this.responseText);
            if(res['status'] == 200){
                window.location.replace('../public/homepage.php'); 
            }else{
                alert(res["message"]);
            }
        }
    };
    
    e.preventDefault();
}

function logout(e) {
    let url = "../php/logout-action.php";
    xhttp.open("GET", url, true);
    xhttp.send();
    xhttp.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200) {
            let res = JSON.parse(this.responseText);
            if(res["status"] == 200) {
                window.location.replace('../public/login.php');
            }
        }
    }
}

$(function() {
    $("#lend").submit(function(e) {
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({
            type: 'POST',
            url: '../php/lend-action.php',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                let res = JSON.parse(response);
                alert(res["message"]);
                if(res["status"] == 200) {
                    $("#lend")[0].reset();
                }
            },
            
            error: function() {
                alert("hello");
            }
        });
    });
});

function printSearchInput(input) {
    var result = "Search results for " + "\"" + input + "\"";
    $('#user-input').text(result);
}
function printItem(itemObj) {
    var searchResults = $('#searchResults');
    var itemContainerHTML = "<div class=\"search-results__item\"></div>";
    for(var key in itemObj) {
        var itemImg = document.createElement("img");
            itemImg.setAttribute("src", `../itemImg/${itemObj[key]['item_image']}`);
        var itemName = document.createElement("h2");
            itemName.textContent = `${itemObj[key]['item_name']}`;
        var itemCat = document.createElement("h2");
            itemCat.textContent = `${itemObj[key]['item_category']}`
        var itemLoc = document.createElement("h2");
            itemLoc.textContent = `${itemObj[key]['item_location']}`
        var itemAbt = document.createElement("p");
            itemAbt.textContent = `${itemObj[key]['item_about']}`
        
        searchResults.append(itemContainerHTML);
        var results = searchResults.children();

        results[key].appendChild(itemImg);
        results[key].appendChild(itemName);
        results[key].appendChild(itemCat);
        results[key].appendChild(itemLoc);
        results[key].appendChild(itemAbt);
    }
}

$("#searchForm").submit((e)=>{
    e.preventDefault();
    var data = $('#searchForm').serialize();
    var url = "../php/search-action.php";
    var urlData = url + "?" + data;

    var userInput = data.slice(data.indexOf("=")+1, data.length);
    
    xhttp.open("GET", urlData, true);
    xhttp.send();
    xhttp.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200){
            let res = JSON.parse(this.responseText);
            printSearchInput(userInput);
            $("#searchResults").empty();
            if(res['success'] == 1){ 
                printItem(res['data']);
            } else{
                alert(res["msg"]);
            }
            $("#searchForm")[0].reset();
        }
    }
})