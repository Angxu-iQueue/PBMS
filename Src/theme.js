
//dark-mode
var icon = document.getElementById("icon");

if(localStorage.getItem("theme") == null){
    localStorage.setItem("theme", "light");    
}

let LocalData = localStorage.getItem("theme");

if(LocalData == "light"){
    icon.src ="Assets/moon.png";
    document.body.classList.remove("dark-theme");
}
else if(LocalData == "dark"){
    icon.src = "Assets/sun.png";
    document.body.classList.add("dark-theme");

}

icon.onclick = function(){
    document.body.classList.toggle("dark-theme");
    if(document.body.classList.contains("dark-theme")){
        icon.src = "Assets/sun.png";
        localStorage.setItem("theme", "dark");

    }
    else{
        icon.src = "Assets/moon.png";
        localStorage.setItem("theme", "light");
    }
}
