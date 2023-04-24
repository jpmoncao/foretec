// Toggle menu
const icons = document.querySelectorAll('.icon');

icons.forEach (icon => {  
  icon.addEventListener('click', (event) => {
    icon.classList.toggle('open');
    if (document.querySelector('menu.open') !== null) {
      const nav = document.querySelector('nav.menu-container');
      nav.style.display = 'flex';
    } else {
      const nav = document.querySelector('nav.menu-container');
      nav.style.display = 'none';
    }
  });
});