const image = document.getElementsByClassName('zoomable')[0];
const body = document.getElementsByClassName('fond-noir')[0];
const no = document.getElementById('no-scroll');

document.querySelectorAll(".zoomable").forEach(image => {
  image.addEventListener("click", () => {
    image.classList.toggle("zoom");
    body.classList.toggle('body-noir');
    no.classList.toggle('bouge-pas');
  });
});