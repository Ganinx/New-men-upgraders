var menu = document.getElementsByClassName("hamburger") [0];

menu.addEventListener("click",function() {
    var menub = document.getElementsByClassName("menub") [0];
    menub.classList.toggle("ouvert");
})