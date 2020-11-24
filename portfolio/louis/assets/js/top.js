var nav = document.getElementById('nav');

window.onscroll = function(){
    if (window.pageYOffset <300) {
        nav.style.background = "transparent";
        nav.style.color = "transparent";
    }
    else {
        nav.style.background = "#f55656";
        nav.style.color = "#fff";
    }
}