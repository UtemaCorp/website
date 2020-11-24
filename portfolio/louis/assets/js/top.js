var nav = document.getElementById('nav');

window.onscroll = function(){
    if (window.pageYOffset >100) {
        nav.style.background = "#f55656";
        nav.style.color = "#fff";
    }
    else {
        nav.style.background = "transparent";
        nav.style.color = "transparent";
    }
}