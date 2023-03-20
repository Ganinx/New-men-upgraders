const image = document.getElementsByClassName('zoomable')[0];
var body = document.getElementsByClassName('fond-noir')[0];
var no = document.getElementById('no-scroll');

image.addEventListener('click', () => {
    image.classList.toggle('zoom');
    body.classList.toggle('body-noir');
    no.classList.toggle('bouge-pas');
});

