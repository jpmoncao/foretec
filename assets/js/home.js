// Roll scrollbar
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