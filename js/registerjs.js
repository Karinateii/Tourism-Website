var selectMenu = document.getElementById("select-menu");
var drpdwnbtn = document.getElementById("plinterest");
var drpdwnsty = document.getElementById("pldropdown");
var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        drpdwnsty.innerHTML = this.responseText;
    }
    xhttp.open("GET", "dropdownallPop.php", true);
    xhttp.send();   

    
    function funcTogg(){
        if(drpdwnsty.style.display === "block"){
            drpdwnsty.style.display = "none";
        }else{
            drpdwnsty.style.display = "block";
        }
    }