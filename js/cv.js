var image = document.getElementsByClassName('zoomable')[0,2];
const body = document.getElementsByClassName('fond-noir')[0,2];
const body2 = document.getElementsByClassName('fond-noir2')[0];
const body3 = document.getElementsByClassName('fond-noir3')[0];
const no = document.getElementById('no-scroll');

document.querySelectorAll(".zoomable").forEach(image => {
  image.addEventListener("click", () => {
    image.classList.toggle("zoom");
    image.classList.toggle("zoom2");
    body.classList.toggle('body-noir');
    body2.classList.toggle('body-noir2');
    body3.classList.toggle('body-noir3');
    no.classList.toggle('bouge-pas');
  });
});;