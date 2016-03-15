
function init() {
    window.addEventListener("load" , function(){check_events();});
    window.addEventListener("resize" , function(){check_events();});
    window.addEventListener("scroll", function(){scroll_check();});
    document.getElementById("opener").addEventListener("click", function(){open()});
}
function check_events(){
    scroll_check();
    size_check();
    
}
var menu = document.getElementById("menu");
function scroll_check(){
    
    var menu = document.getElementById("menu");
    var opener = document.getElementById("opener");
    if(menu.offsetTop < document.body.scrollTop){
        menu.className = "mobile-menu";
        menu.style.display = "none";
        opener.style.display = "block";        
            
    }
    else{
        if(window.innerWidth < 600){
        menu.className = "mobile-menu";
        menu.style.display = "none";
        opener.style.display = "block";
    }
    else{
        menu.className = "menu";
        menu.style.display = "flex";
        opener.style.display = "none";
    }
    }
}

function size_check(){
    
}

function open(){
    $("#menu").toggle();
}