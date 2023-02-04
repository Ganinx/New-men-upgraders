var menu = document.getElementsByClassName("icon nav-icon-5") [0];

menu.addEventListener("click",function() {
    var menub = document.getElementsByClassName("menub") [0];
    menub.classList.toggle("ouvert");
})
const icons = document.querySelectorAll('.icon');
icons.forEach (icon => {  
  icon.addEventListener('click', (event) => {
    icon.classList.toggle("open");
  });
});
