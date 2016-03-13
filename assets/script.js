
function init() {
    
    window.addEventListener("resize" , function(){scrollcheck();});
    scrollcheck();
}

function scrollcheck(){
        
    // Number of content elements
    var about = document.getElementById("about");
    var aboutOffset = about.offsetTop;
    
    var service = document.getElementById("service");
    var serviceOffset = service.offsetTop;
    
    var portfolio = document.getElementById("portfolio");
    var portfolioOffset = portfolio.offsetTop;
    
    var contact = document.getElementById("contact");
    var contactOffset = contact.offsetTop;
    
    var register = document.getElementById("register");
    var registerOffset = register.offsetTop;
    
    var menu = document.getElementById("menu");
    var menuOffset = menu.offsetTop;
    
    
    document.getElementById("aboutButton").addEventListener("click", function(){window.scrollTo(0,aboutOffset - 100);});
    document.getElementById("serviceButton").addEventListener("click", function(){window.scrollTo(0,serviceOffset - 100);});
    document.getElementById("portfolioButton").addEventListener("click", function(){window.scrollTo(0,portfolioOffset - 100);});
    document.getElementById("contactButton").addEventListener("click", function(){window.scrollTo(0,contactOffset - 100);});
    document.getElementById("registerButton").addEventListener("click", function(){window.scrollTo(0,registerOffset - 100);});
    
    $(window).scroll(function(){
        
        if($(this).scrollTop() > menuOffset){
            menuAnim();
        }
        if($(this).scrollTop() < menuOffset){
            menuAnimRev();
        }
        
        var clearance = aboutOffset/1.4;
        if($(this).scrollTop() > (aboutOffset - clearance)){
            aboutAnim();
        }
        if($(this).scrollTop() > (serviceOffset - clearance)){
            serviceAnim();
        }
        if($(this).scrollTop() > (portfolioOffset - clearance)){
            portfolioAnim();
        }
        if($(this).scrollTop() > (contactOffset - clearance)){
            contactAnim();
        }
        if($(this).scrollTop() > (registerOffset - clearance)){
            registerAnim();
        }
    });
}
function menuAnim(){
    $("#menu").css({"position":"fixed","margin-top":"auto","top":"0px","width":"75%","left":"50%","margin-left":"-37.5%"});
    
}
function menuAnimRev(){
    $("#menu").css({"position":"relative","margin-top":"10rem","top":"auto","width":"auto","left":"auto","margin-left":"auto"});
    
}
function aboutAnim(){
    $("#about").animate({opacity:1},2000);
}
function serviceAnim(){
    $("#service").animate({opacity:1},2000);
}
function portfolioAnim(){
    $("#portfolio").animate({opacity:1},2000);
}
function contactAnim(){
    $("#contact").animate({opacity:1},2000);
}
function registerAnim(){
    $("#register").animate({opacity:1},2000);
}