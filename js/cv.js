const image = document.getElementsByClassName('zoomable')[0];
const body = document.getElementsByClassName('fond-noir')[0];
const body2 = document.getElementsByClassName('fond-noir2')[0];
const no = document.getElementById('no-scroll');
const opaque = document.getElementById('carre-cv');
const opaque2 = document.getElementById('carre-cv2');
const text = document.getElementById('text-opaque');
const text2 = document.getElementById('text-opaque2');
const triangle = document.getElementById('triangle2');


document.querySelectorAll(".zoomable").forEach(image => {
  image.addEventListener("click", () => {
    image.classList.toggle("zoom");
    image.classList.toggle("zoom2");
    body.classList.toggle('body-noir');
    body2.classList.toggle('body-noir2');
    no.classList.toggle('bouge-pas');
    opaque.classList.toggle('carre-cv-opaque');
    opaque2.classList.toggle('carre-cv-opaque');
    text.classList.toggle('text-cv-disparait');
    text2.classList.toggle('text-cv-disparait');
    triangle.classList.toggle('triangle-opaque');
  });
});
