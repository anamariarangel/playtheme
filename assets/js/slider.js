const sliderFilm = document.querySelector('.slider-single__article-film')
const sliderDocs = document.querySelector('.slider-single__article-docs')
const sliderSeries = document.querySelector('.slider-single__article-series')
const buttonArrow = document.querySelector(".control")
const isLeft = document.querySelectorAll(".btn-arrow--left")
const isRight = document.querySelectorAll(".btn-arrow--right")

const articleItem = document.querySelector('.article-slider')

isLeft.forEach(function(element) {
  element.addEventListener("click", function() {
    let slider;
  
    if (element.classList.contains('left-film')) {
      slider = sliderFilm;
    } else if (element.classList.contains('left-docs')) {
      slider = sliderDocs;
    } else if (element.classList.contains('left-series')) {
      slider = sliderSeries;
    }
  
    const sliderItems = slider.children;
  
    let moveElement = sliderItems[0];
    let cloneElement = moveElement.cloneNode(true);
    let parentElement = moveElement.parentNode;
  
    cloneElement.style.opacity = 0;
    cloneElement.style.pointerEvents = 'none';
  
    parentElement.appendChild(cloneElement);
  
    requestAnimationFrame(() => {
      cloneElement.style.transform = 'translateX(100%)';
  
      setTimeout(() => {
        parentElement.removeChild(cloneElement);
        parentElement.appendChild(moveElement);
      }, 400);
    });
  });
});

isRight.forEach(function(element) {
  element.addEventListener("click", function() {
    let slider;
  
    if (element.classList.contains('right-film')) {
      slider = sliderFilm;
    } else if (element.classList.contains('right-docs')) {
      slider = sliderDocs;
    } else if (element.classList.contains('right-series')) {
      slider = sliderSeries;
    }
  
    const sliderItems = slider.children;
  
    let moveElement = sliderItems[sliderItems.length - 1];
    let cloneElement = moveElement.cloneNode(true);
    let parentElement = moveElement.parentNode;
  
    cloneElement.style.opacity = 0;
    cloneElement.style.pointerEvents = 'none';
  
    parentElement.insertBefore(cloneElement, parentElement.firstChild);
  
    requestAnimationFrame(() => {
      cloneElement.style.transform = 'translateX(-100%)';
  
      setTimeout(() => {
        parentElement.removeChild(cloneElement);
        parentElement.insertBefore(moveElement, parentElement.firstChild);
      }, 100);
    });
  });
});
