(() => {
  const container = document.querySelector('.slider-container');
  const slides = document.querySelectorAll('.slide');
  const btns = document.querySelectorAll('.slider-controls-button');
  let currentIndex = 0;
  let translateValue = 0;
  let sliderTimer;

  const goToSlideId = id => {
    currentIndex = id;
    translateValue = - slideWidth() * id;
    updateContainer();

    switchBtnStates();
  }

  const goToNextSlide = () => {
    if(currentIndex === slides.length -1) {
      currentIndex = 0;
      translateValue = 0;
      updateContainer();
    } else {
      currentIndex++;
      translateValue = translateValue - slideWidth();
      updateContainer();
    }

    switchBtnStates();
  }

  const slideWidth = () => {
    return document.querySelector('.slide').clientWidth;
  }

  const updateContainer = () => {
    container.style.transform = `translateX(${translateValue}px)`;
  }

  const startSliderTimer = () => {
    sliderTimer = setInterval(() => {
      goToNextSlide();
    }, 5000);
  }

  const handleClick = id => {
    goToSlideId(id);
    clearInterval(sliderTimer);
  }

  const switchBtnStates = () => {
    for(let i = 0; i < btns.length; i++) {
      btns[i].classList.remove('slider-controls-button-active');
    }

    btns[currentIndex].classList.add('slider-controls-button-active');
  }

  const init = () => {
    if(container) {
      startSliderTimer();
      switchBtnStates();

      for(let i = 0; i < btns.length; i++) {
        btns[i].addEventListener('click', () => {
          handleClick(i);
        });
      }
    }
  }

  init();
})();
