let getId = "";
function funcTog(getId){
    let submenu = document.getElementById(getId);
    let navdrop = submenu.children[1];
    if(navdrop.style.display === "block"){
        navdrop.style.display = "none";
    }else{
        navdrop.style.display = "block";
    }
}