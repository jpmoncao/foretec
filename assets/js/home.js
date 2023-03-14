// Toggle menu
const icons = document.querySelectorAll('.icon');

icons.forEach (icon => {  
  icon.addEventListener('click', (event) => {
    icon.classList.toggle("open")
  });
});


// roll scrollbar
const buttonNext = document.querySelector('.pass-button')
const content = document.querySelector('.card-roll')
const buttonPrev = document.querySelector('.prev-button')
let scrollIncrement = 0

buttonNext.addEventListener("click", () => {
  
  
  // Smooth animation
  
  let scrollX = content.scrollLeft; // O ponto atual
  let distance = 150 // A distância a rolar
  let duration = 500; // A duração da rolagem em milissegundos
  
  let startTime = null;
  
  function scrollAnimation(currentTime) {
    if (startTime === null) startTime = currentTime;
    let elapsedTime = currentTime - startTime;
    let scrollPosition = easeInOut(elapsedTime, scrollX, distance, duration);
    content.scrollLeft = scrollPosition;
    if (elapsedTime < duration) {
      requestAnimationFrame(scrollAnimation);
    }
  }
  
  function easeInOut(t, b, c, d) {
    t /= d / 2;
    if (t < 1) return c / 2 * t * t + b;
    t--;
    return -c / 2 * (t * (t - 2) - 1) + b;
  }
  
  requestAnimationFrame(scrollAnimation);

  // Appear button
 let maxScrollWidth = content.scrollWidth - content.clientWidth;
console.log(maxScrollWidth);
  scrollIncrement += 100
  
  if (scrollIncrement != 0) {
    buttonPrev.style.display = 'block'
  } else {
    buttonPrev.style.display = 'none'
  }

  if(content.scrollLeft > maxScrollWidth - 2) {
    buttonNext.style.display = 'none'
  } else {
    buttonNext.style.display = 'block'
  }

 

  console.log("Next: " + content.scrollLeft )
})

buttonPrev.addEventListener("click" , () => {
  
  // Smooth animation


  let scrollX = content.scrollLeft; // O ponto atual
  let distance = -150 // A distância a rolar
  let duration = 500; // A duração da rolagem em milissegundos

  let startTime = null;

  function scrollAnimation(currentTime) {
    if (startTime === null) startTime = currentTime;
    let elapsedTime = currentTime - startTime;
    let scrollPosition = easeInOut(elapsedTime, scrollX, distance, duration);
    content.scrollLeft = scrollPosition;
    if (elapsedTime < duration) {
      requestAnimationFrame(scrollAnimation);
    }
  }

  function easeInOut(t, b, c, d) {
    t /= d / 2;
    if (t < 1) return c / 2 * t * t + b;
    t--;
    return -c / 2 * (t * (t - 2) - 1) + b;
  }

  requestAnimationFrame(scrollAnimation);


  // Appear button
  
  scrollIncrement -= 100

  if (scrollIncrement > 0) {
    buttonPrev.style.display = 'block'
  } else {
    buttonPrev.style.display = 'none'
  }

  if(scrollIncrement > 399) {
    buttonNext.style.display = 'none'
  } else {
    buttonNext.style.display = 'block'
  }

  
  console.log("Prev: " + scrollIncrement )
})