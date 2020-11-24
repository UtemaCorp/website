var nav = document.getElementById('nav');

window.onscroll = function(){
    if (window.pageYOffset <300) {
        nav.style.background = "transparent";
        nav.style.color = "transparent";
    }
    else {
        nav.style.background = "#b84141";
        nav.style.color = "#fff";
    }
}