// Toggle menu
const icons = document.querySelectorAll('.icon');

icons.forEach (icon => {  
  icon.addEventListener('click', (event) => {
    icon.classList.toggle("open")
  });
});


// roll scrollbar
new Glider(document.querySelector('.glider'), {
  slidesToShow: 5,
  slidesToScroll: 2,
  draggable: true,
  dots: '.dots',
  arrows: {
    prev: '.prev-button',
    next: '.pass-button'
  }
});